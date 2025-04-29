<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaqueRecherche extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'jour', 'heure_debut', 'heure_fin'];
    public function Company()
    {
        return $this->belongsTo(User::class);
    }


}
