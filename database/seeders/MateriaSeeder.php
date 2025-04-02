<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Materia;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Directorio donde se guardarán las imágenes (asegúrate de que existe)
        $directory = 'public/materias';
        Storage::makeDirectory($directory);

        $materias = [
            [
                'nombre' => 'Matemáticas',
                'slug' => 'matematicas',
                'descripcion' => 'Ciencia de los números y las formas geométricas',
                'imagenes' => [
                    [
                        'tipo' => 'portada',
                        'path' => 'matematicas.jpg' // Nombre del archivo (debes tenerlo en storage/app/seeder)
                    ]
                ]
            ],
            [
                'nombre' => 'Física',
                'slug' => 'fisica',
                'descripcion' => 'Estudio de la materia, energía y sus interacciones',
                'imagenes' => [
                    [
                        'tipo' => 'portada',
                        'path' => 'fisica.jpg'
                    ]
                ]
            ],
            [
                'nombre' => 'Química',
                'slug' => 'quimica',
                'descripcion' => 'Ciencia que estudia la composición de la materia',
                'imagenes' => [
                    [
                        'tipo' => 'portada',
                        'path' => 'quimica.jpg'
                    ]
                ]
            ],
            [
                'nombre' => 'Cálculo',
                'slug' => 'calculo',
                'descripcion' => 'Rama de las matemáticas que estudia el cambio',
                'imagenes' => [
                    [
                        'tipo' => 'portada',
                        'path' => 'calculo.jpg'
                    ]
                ]
            ]
        ];

        foreach ($materias as $materiaData) {
            // Crear la materia
            $materia = Materia::create([
                'nombre' => $materiaData['nombre'],
                'slug' => $materiaData['slug'],
                'descripcion' => $materiaData['descripcion']
            ]);

            // Asignar imágenes (simulamos que existen en storage/app/seeder)
            foreach ($materiaData['imagenes'] as $imagenData) {
                $sourcePath = database_path('seeders/images/' . $imagenData['path']);
                $destinationPath = "materias/{$imagenData['path']}";

                // Copiar imagen (en producción usarías Storage::put)
                if (file_exists($sourcePath)) {
                    Storage::copy(
                        "seeder/{$imagenData['path']}",
                        "public/{$destinationPath}"
                    );
                }

                $materia->imagenes()->create([
                    'file_path' => $destinationPath,
                    'tipo' => $imagenData['tipo']
                ]);
            }
        }
    }
}
