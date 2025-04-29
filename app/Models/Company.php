<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'status'];


    // Relation avec les utilisateurs (une entreprise peut avoir plusieurs utilisateurs)
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
