<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    use HasFactory;
    // app/Models/Formula.php
    public function tema() {
        return $this->belongsTo(Tema::class);
    }

    public function variables() {
        return $this->hasMany(Variable::class);
    }

    public function imagenes() {
        return $this->morphMany(Media::class, 'model');
    }
}
