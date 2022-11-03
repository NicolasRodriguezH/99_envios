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
            ['origin' => "Cundinamarca"],
            ['origin' => 'Bogota'],
            ['origin' => 'Cali']
        ]);
    }
}
