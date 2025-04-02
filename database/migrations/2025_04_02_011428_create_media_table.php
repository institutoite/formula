<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('model_type'); // Ej: "App\Models\Materia"
            $table->unsignedBigInteger('model_id'); // ID del modelo relacionado
            $table->string('file_path'); // "materias/fisica.jpg"
            $table->string('tipo'); // "portada", "diagrama", etc.
            $table->integer('orden')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
