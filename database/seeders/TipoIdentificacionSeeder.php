<?php

namespace Database\Seeders;

use App\Models\TipoIdentificacion;
use Illuminate\Database\Seeder;

class TipoIdentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoIdentificacion::create([
        	'nombre' => 'Cédula de Ciudadanía',
        	'abreviacion' => 'C.C',
        ]);

        TipoIdentificacion::create([
        	'nombre' => 'Cédula de Extranjería',
        	'abreviacion' => 'C.E',
        ]);

        TipoIdentificacion::create([
        	'nombre' => 'Pasaporte',
        	'abreviacion' => 'PAS',
        ]);

        TipoIdentificacion::create([
        	'nombre' => 'Permiso Especial',
        	'abreviacion' => 'P.E',
        ]);

    }
}
