<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create([
        	'nombre' => 'Colombia',
        	'abreviacion' => 'CO',
        	'dominio' => 'cidenet.com.co'
        ]);

        Pais::create([
        	'nombre' => 'Servicios Varios',
        	'abreviacion' => 'US',
        	'dominio' => 'cidenet.com.us'
        ]);

    }
}
