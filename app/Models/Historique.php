<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'plaque_id', 'status', 'adresse', 'telephone', 'date_recherche'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plaque()
    {
        return $this->belongsTo(Plaque::class);
    }
}
