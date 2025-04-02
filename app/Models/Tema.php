<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    // app/Models/Tema.php
    public function materia() {
        return $this->belongsTo(Materia::class);
    }

    public function formulas() {
        return $this->hasMany(Formula::class);
    }

    public function imagenes() {
        return $this->morphMany(Media::class, 'model');
    }
}
