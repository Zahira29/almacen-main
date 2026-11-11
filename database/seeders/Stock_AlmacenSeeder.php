<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock_Almacen;

class Stock_AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stock_Almacen::create([
            'producto_id' => 1,
            'almacen_id' => 1,
            'stock' => 100,
        ]);

        Stock_Almacen::create([
            'producto_id' => 2,
            'almacen_id' => 1,
            'stock' => 50,
        ]);

        Stock_Almacen::create([
            'producto_id' => 3,
            'almacen_id' => 2,
            'stock' => 75,
        ]);

        Stock_Almacen::create([
            'producto_id' => 4,
            'almacen_id' => 2,
            'stock' => 30,
        ]);

        Stock_Almacen::create([
            'producto_id' => 5,
            'almacen_id' => 1,
            'stock' => 20,
        ]);
    }
}
