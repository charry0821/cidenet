<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AreaSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(TipoIdentificacionSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
