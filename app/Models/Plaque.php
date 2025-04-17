<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Plaque extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'numero_plaque', 'status', 'adresse','phone_number','archived', 'date_recherche'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function alertes()
    {
        return $this->hasMany(Alerte::class);
    }

    public function historiques()
    {
        return $this->hasMany(Historique::class);
    }

    protected static function booted()
    {
        static::created(function ($plaque) {
            $plaque->verifierEnFouriere();
        });
    }

    public function verifierEnFouriere()
    {
        try {
            $response = Http::timeout(360)
                ->post('http://77.68.95.236:5000/scrape', [
                    'license_plate' => $this->numero_plaque
                ]);

            if ($response->successful()) {
                $data = $response->json();
                $this->update([
                    'status' => $data['en_fouriere'] ? "en_fouriere" : "libre",
                    'date_recherche' => now()
                ]);
            } else {
                Log::error('Échec de la requête HTTP', [
                    'plaque' => $this->numero_plaque,
                    'response' => $response->body()
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Erreur lors de la requête HTTP', [
                'plaque' => $this->numero_plaque,
                'error' => $e->getMessage()
            ]);
        }
    }
}
