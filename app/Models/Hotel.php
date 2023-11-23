<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_hotel',
        'description',
        'nom_chambre',
        'Prix',
        'Nombre_lits',
        'Max_adult',
        'Enfant_max',
        'Attribut',
        'Status',
    ];

}
