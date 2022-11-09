<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinies')->insert([
            ['destiny' => "Mosquera / Cundinamarca"],
            ['destiny' => 'Funza / Cundinamarca'],
            ['destiny' => 'Madrid / Cundinamarca'],
            ['destiny' => 'El Corzo / Cundinamarca'],
            ['destiny' => 'Facatativa / Cundinamarca'],
            ['destiny' => 'Cota / Cundinamarca'],
            ['destiny' => 'Buenavista / Cundinamarca'],
            ['destiny' => 'Parcelas / Cundinamarca'],
            ['destiny' => 'Siberia / Cundinamarca'],
            ['destiny' => 'Chia / Cundinamarca'],
            ['destiny' => 'Cajica / Cundinamarca'],
            ['destiny' => 'El canelon / Cundinamarca'],
            ['destiny' => 'El tejar / Cundinamarca'],
            ['destiny' => 'Hato Grande / Cundinamarca'],
            ['destiny' => 'Zipaquira / Cundinamarca'],
            ['destiny' => 'Tenjo / Cundinamarca'],
            ['destiny' => 'Tabio / Cundinamarca'],
            ['destiny' => 'La punta / Cundinamarca'],
            ['destiny' => 'Puente de piedra / Cundinamarca'],
            ['destiny' => 'Cogua / Cundinamarca'],
            ['destiny' => 'Soacha / Cundinamarca'],
        ]);
    }
}
