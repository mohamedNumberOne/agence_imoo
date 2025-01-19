<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealState extends Model
{
    /** @use HasFactory<\Database\Factories\RealStateFactory> */
    use HasFactory;

    protected $fillable = [
        "titre_bien",
        "photo_principale",
        "etage",
        "statut",
        "adresse",
        "real_state_type_id",
        "wilaya_id",
        "daira_id",
        "prix",
        "Superficie",
        "transaction",
        "nb_pieces",
        "description",
        "num_prop",

    ];
}
