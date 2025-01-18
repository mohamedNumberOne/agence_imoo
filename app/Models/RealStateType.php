<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealStateType extends Model
{
    /** @use HasFactory<\Database\Factories\RealStateTypeFactory> */
    use HasFactory;

    protected $fillable = [
     
        "nom_type",
        "class_rech",


    ];
}
