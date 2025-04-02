<?php

namespace Database\Seeders;

use App\Models\Materia;
use App\Models\Tema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $temas = [
            [
                'nombre' => 'Potenciación',
                'slug' => 'potenciacion',
                'descripcion' => 'Operación que consiste en multiplicar un número por sí mismo varias veces (ej: 2³ = 8)'
            ],
            [
                'nombre' => 'Radicación',
                'slug' => 'radicacion',
                'descripcion' => 'Operación inversa a la potenciación (ej: √9 = 3)'
            ],
            [
                'nombre' => 'Áreas y perímetros',
                'slug' => 'areas-perimetros',
                'descripcion' => 'Cálculo de áreas y perímetros de triángulos, cuadrados, círculos, etc.'
            ],
            [
                'nombre' => 'Ecuación cuadrática',
                'slug' => 'ecuacion-cuadratica',
                'descripcion' => 'Ecuaciones de la forma ax² + bx + c = 0 y su solución'
            ],
            [
                'nombre' => 'Logaritmos',
                'slug' => 'logaritmos',
                'descripcion' => 'Inversos de las funciones exponenciales (logₐb = c ⇔ aᶜ = b)'
            ],
            [
                'nombre' => 'Progresiones aritméticas',
                'slug' => 'progresiones-aritmeticas',
                'descripcion' => 'Sucesiones con diferencia constante (ej: 2, 5, 8, 11...)'
            ],
            [
                'nombre' => 'Progresiones geométricas',
                'slug' => 'progresiones-geometricas',
                'descripcion' => 'Sucesiones con razón constante (ej: 3, 6, 12, 24...)'
            ],
            [
                'nombre' => 'Teorema de Pitágoras',
                'slug' => 'teorema-pitagoras',
                'descripcion' => 'En triángulos rectángulos: a² + b² = c²'
            ],
            [
                'nombre' => 'Volúmenes de sólidos geométricos',
                'slug' => 'volumenes',
                'descripcion' => 'Cálculo de volúmenes de cubos, esferas, cilindros, etc.'
            ],
            [
                'nombre' => 'Funciones lineales y afines',
                'slug' => 'funciones-lineales',
                'descripcion' => 'Funciones de la forma f(x) = mx + b'
            ],
            [
                'nombre' => 'Funciones cuadráticas',
                'slug' => 'funciones-cuadraticas',
                'descripcion' => 'Funciones de la forma f(x) = ax² + bx + c'
            ],
            [
                'nombre' => 'Sistemas de ecuaciones lineales',
                'slug' => 'sistemas-ecuaciones',
                'descripcion' => 'Conjunto de ecuaciones con múltiples variables'
            ],
            [
                'nombre' => 'Factorización algebraica',
                'slug' => 'factorizacion',
                'descripcion' => 'Descomposición de polinomios en factores'
            ],
            [
                'nombre' => 'Trigonometría básica',
                'slug' => 'trigonometria-basica',
                'descripcion' => 'Seno, coseno y tangente en triángulos rectángulos'
            ],
            [
                'nombre' => 'Identidades trigonométricas',
                'slug' => 'identidades-trigonometricas',
                'descripcion' => 'Igualdades entre funciones trigonométricas'
            ],
            [
                'nombre' => 'geometría analitica',
                'slug' => 'geometria-analitica',
                'descripcion' => 'Distancia entre puntos, ecuación de la recta, etc.'
            ],
            [
                'nombre' => 'recta',
                'slug' => 'recta',
                'descripcion' => 'Distancia entre puntos, ecuación de la recta, etc.'
            ],
            [
                'nombre' => 'circunferencia',
                'slug' => 'circunferencia',
                'descripcion' => 'Distancia entre puntos, ecuación de la recta, etc.'
            ],
            [
                'nombre' => 'Parábola',
                'slug' => 'parabola',
                'descripcion' => 'Distancia entre puntos, ecuación de la recta, etc.'
            ],
            [
                'nombre' => 'Elipse',
                'slug' => 'elipse',
                'descripcion' => 'Distancia entre puntos, ecuación de la recta, etc.'
            ],
            [
                'nombre' => 'Hipérbola',
                'slug' => 'hiperbola',
                'descripcion' => 'Distancia entre puntos, ecuación de la recta, etc.'
            ],


            [
                'nombre' => 'Límites',
                'slug' => 'limites-algebraicos',
                'descripcion' => 'Cálculo de límites de funciones algebraicas'
            ],
            [
                'nombre' => 'Derivadas',
                'slug' => 'derivadas',
                'descripcion' => 'Reglas de derivación: potencia, producto, cociente, cadena'
            ],
            [
                'nombre' => 'Integrales',
                'slug' => 'integrales',
                'descripcion' => 'Cálculo de antiderivadas y áreas bajo curvas'
            ],
            [
                'nombre' => 'Series y sucesiones numéricas',
                'slug' => 'series-sucesiones',
                'descripcion' => 'Estudio de patrones numéricos y sus sumatorias'
            ],
            [
                'nombre' => 'Combinatoria',
                'slug' => 'combinatoria',
                'descripcion' => 'Permutaciones, combinaciones y principio de conteo'
            ],
            [
                'nombre' => 'Distribuciones de probabilidad',
                'slug' => 'distribuciones-probabilidad',
                'descripcion' => 'Distribuciones binomial, normal, Poisson, etc.'
            ],
            [
                'nombre' => 'Estadística descriptiva',
                'slug' => 'estadistica-descriptiva',
                'descripcion' => 'Media, mediana, moda, varianza, desviación estándar'
            ],
            [
                'nombre' => 'Matrices y determinantes',
                'slug' => 'matrices',
                'descripcion' => 'Operaciones con matrices y cálculo de determinantes'
            ],
            [
                'nombre' => 'Números complejos',
                'slug' => 'numeros-complejos',
                'descripcion' => 'Números de la forma a + bi, donde i² = -1'
            ],
            [
                'nombre' => 'Ecuaciones diferenciales',
                'slug' => 'ecuaciones-diferenciales',
                'descripcion' => 'Ecuaciones que involucran derivadas de funciones'
            ],
            [
                'nombre' => 'Vectores en el plano y espacio',
                'slug' => 'vectores',
                'descripcion' => 'Operaciones con vectores: suma, producto punto, cruz'
            ],
            [
                'nombre' => 'Productos notables',
                'slug' => 'productos-notables',
                'descripcion' => 'Identidades algebraicas como (a + b)² = a² + 2ab + b²'
            ],
            [
                'nombre' => 'Razones y proporciones',
                'slug' => 'razones-proporciones',
                'descripcion' => 'Relaciones entre cantidades y proporcionalidad'
            ],
            [
                'nombre' => 'Regla de tres simple',
                'slug' => 'regla-de-tres-simple',
                'descripcion' => 'Método para resolver problemas de proporcionalidad'
            ],
            [
                'nombre' => 'Regla de tres compuesta',
                'slug' => 'regla-de-tres-compuesta',
                'descripcion' => 'Método para resolver problemas de proporcionalidad'
            ],
            [
                'nombre' => 'Inversión proporcional',
                'slug' => 'inversion-proporcional',
                'descripcion' => 'Relaciones donde al aumentar una cantidad, la otra disminuye'
            ],
            [
                'nombre' => 'Interés simple',
                'slug' => 'interes-simple',
                'descripcion' => 'Cálculo de intereses en préstamos e inversiones'
            ],
            [
                'nombre' => 'Interés compuesto',
                'slug' => 'interes-compuesto',
                'descripcion' => 'Cálculo de intereses en préstamos e inversiones'
            ],
            [
                'nombre' => 'Coordenadas polares',
                'slug' => 'coordenadas-polares',
                'descripcion' => 'Sistema de coordenadas alternativo al cartesiano'
            ],
            [
                'nombre' => 'Transformaciones geométricas',
                'slug' => 'transformaciones-geometricas',
                'descripcion' => 'Traslaciones, rotaciones, reflexiones y homotecias'
            ],
            [
                'nombre' => 'Teorema del binomio',
                'slug' => 'teorema-binomio',
                'descripcion' => 'Expansión de (a + b)ⁿ usando coeficientes binomiales'
            ],
            [
                'nombre' => 'Funciones',
                'slug' => 'funciones',
                'descripcion' => 'Funciones de la forma'
            ],
        ];

        foreach ($temas as $tema) {
            Tema::firstOrCreate(
                ['nombre' => $tema['nombre']],
                [
                    'materia_id' => 1, // Matemáticas
                    'slug' => $tema['slug'],
                    'descripcion' => $tema['descripcion']
                ]
            );
        }
    }
}
