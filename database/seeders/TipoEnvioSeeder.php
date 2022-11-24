<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_envios')->insert([
            ['nombre' => "SOBRE CARTA"],
            ['nombre' => "SOBRE MANILA"],
            ['nombre' => "PAQUETE PEQUEÑO"],
            ['nombre' => "TULA"],
            ['nombre' => "CAJA PEQUEÑA"],
            ['nombre' => "OTROS"],
            ['nombre' => "BULTO"],
            ['nombre' => "PAQUETE"],
            ['nombre' => "CAJA"],
        ]);
    }
}
