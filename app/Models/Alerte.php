<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
    use HasFactory;
    protected $fillable = [
        'plaque_id',
        'user_id',
        'message',
    ];

    public function plaque() {
        return $this->belongsTo(Plaque::class);
    }
}
