<?php

namespace Database\Seeders;

use App\Models\StatusGuide;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$status = StatusGuide::factory()->create();

        DB::table('status_guides')->insert([
            [
                'name' => 'Creado',
                'color' => 'gray'
            ],
            [
                'name' => 'Enviado',
                'color' => 'blue'
            ],
            [
                'name' => 'Entregado',
                'color' => 'green'
            ],
            [
                'name' => 'Cancelado',
                'color' => 'red'
            ],
            [
                'name' => 'Informacion',
                'color' => 'blue'
            ],
            [
                'name' => 'N/A',
                'color' => 'gray'
            ],
            [
                'name' => 'Pendiente',
                'color' => 'blue'
            ],
            [
                'name' => 'Recogido',
                'color' => 'black'
            ],
            [
                'name' => 'En curso de entrega',
                'color' => 'blue'
            ],
            [
                'name' => 'Perdido',
                'color' => 'green'
            ],
            [
                'name' => 'Devuelto',
                'color' => 'gray'
            ],
            [
                'name' => 'Recoger en oficina',
                'color' => 'gray'
            ],
            [
                'name' => 'Entregado en origen',
                'color' => 'green'
            ],
            [
                'name' => 'Dañado',
                'color' => 'black'
            ],
            [
                'name' => 'Redirigido',
                'color' => 'gray'
            ],
            [
                'name' => 'Recoleeccion en camino',
                'color' => 'green'
            ],
            [
                'name' => '1 Intento de entrega',
                'color' => 'black'
            ],
            [
                'name' => '2 Intento de entrega',
                'color' => 'black'
            ],
            [
                'name' => '3 Intento de entrega',
                'color' => 'black'
            ],
            [
                'name' => 'Problema de devolucion',
                'color' => 'black'
            ],
            [
                'name' => 'Error de direccion',
                'color' => 'gray'
            ],
            [
                'name' => 'Imposible de llegar',
                'color' => 'black'
            ],
            [
                'name' => 'Demorado',
                'color' => 'gray'
            ], 
        ]);
    }
}
