<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definimos las categorías como un array de arrays
        $categories = [
            ['tecnología', 'productos relacionados con tecnología y dispositivos electrónicos'],
            ['moda', 'ropa, accesorios y productos relacionados con la moda'],
            ['hogar', 'productos para el hogar, decoración y electrodomésticos'],
            ['juguetes', 'juguetes para niños de todas las edades'],
            ['deportes', 'equipos deportivos y accesorios para actividades físicas'],
        ];

        // Iteramos sobre el array y usamos firstOrCreate para crear o encontrar cada categoría
        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category[0]], // Buscar por 'name'
                ['description' => $category[1]] // Crear con 'description' si no existe
            );
        }
    }
}