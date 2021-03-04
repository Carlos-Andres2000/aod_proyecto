<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Closet extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'model', 'color', 'numberDoors', 'numberLegs', 
    'typeWood', 'numberDrawers', 'numberGlasses', 'description'];
}
