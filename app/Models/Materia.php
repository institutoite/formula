<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    // app/Models/Materia.php
    public function temas() {
        return $this->hasMany(Tema::class);
    }

    public function imagenes() {
        return $this->morphMany(Media::class, 'model');
    }
}
