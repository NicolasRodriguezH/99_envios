<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('origins')->insert([
            [
                'origin' => "Cundinamarca",
                'valor_flete' => 10000
            ],
            [
                'origin' => 'Bogota',
                'valor_flete' => 7000
            ],
            [
                'origin' => 'Cali',
                'valor_flete' => 7000
            ]
        ]);
    }
}
