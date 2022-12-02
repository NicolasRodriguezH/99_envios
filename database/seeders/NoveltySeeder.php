<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoveltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('novelties')->insert([
            ['novelty' => 'No hay quien reciba'],
            ['novelty' => 'Direccion incorecta'],
            ['novelty' => 'No reside'],
            ['novelty' => 'Producto dañado'],
            ['novelty' => 'No tiene dinero'],
            ['novelty' => 'Ya recibio producto'],
            ['novelty' => 'No le interesa(rehusado)'],
            ['novelty' => 'Reprogramar entrega'],
            ['novelty' => 'Cliente solicita devolucion'],
        ]);
    }
}
