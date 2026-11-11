<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Producto A',
            'descripcion' => 'Descripción del Producto A',
            'precio' => 10.99,
        ]);

        Producto::create([
            'nombre' => 'Producto B',
            'descripcion' => 'Descripción del Producto B',
            'precio' => 15.49,
        ]);
        Producto::create([
            'nombre' => 'Producto C',
            'descripcion' => 'Descripción del Producto C',
            'precio' => 7.99,
        ]);
        Producto::create([
            'nombre' => 'Producto D',
            'descripcion' => 'Descripción del Producto D',
            'precio' => 12.75,
        ]);
        Producto::create([
            'nombre' => 'Producto E',
            'descripcion' => 'Descripción del Producto E',
            'precio' => 9.50,
        ]);
    }
}
