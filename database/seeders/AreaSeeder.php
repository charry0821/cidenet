<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
        	'nombre' => 'Administración'
        ]);

        Area::create([
        	'nombre' => 'Financiera'
        ]);

        Area::create([
        	'nombre' => 'Compras'
        ]);

        Area::create([
        	'nombre' => 'Infraestructura'
        ]);

        Area::create([
        	'nombre' => 'Operación'
        ]);

        Area::create([
        	'nombre' => 'Talento Humano'
        ]);

        Area::create([
        	'nombre' => 'Servicios Varios'
        ]);
    }
}
