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
            [
                'destiny' => "Mosquera / Cundinamarca",
                /* 'valor_flete' => 1200 */
            ],
            [
                'destiny' => 'Funza / Cundinamarca',
                /* 'valor_flete' => 1800 */
            ],
            [
                'destiny' => 'Madrid / Cundinamarca',
                /* 'valor_flete' => 3200 */
            ],
            [
                'destiny' => 'El Corzo / Cundinamarca',
                /* 'valor_flete' => 2200 */
            ],
            [
                'destiny' => 'Facatativa / Cundinamarca',
                /* 'valor_flete' => 3000 */
            ],
            [
                'destiny' => 'Cota / Cundinamarca',
                /* 'valor_flete' => 3500 */
            ],
            [
                'destiny' => 'Buenavista / Cundinamarca',
                /* 'valor_flete' => 3100 */
            ],
            [
                'destiny' => 'Parcelas / Cundinamarca',
                /* 'valor_flete' => 4000 */
            ],
            [
                'destiny' => 'Siberia / Cundinamarca',
                /* 'valor_flete' => 6200 */
            ],
            [
                'destiny' => 'Chia / Cundinamarca',
                /* 'valor_flete' => 5000 */
            ],
            [
                'destiny' => 'Cajica / Cundinamarca',
                /* 'valor_flete' => 7200 */
            ],
            [
                'destiny' => 'El canelon / Cundinamarca',
                /* 'valor_flete' => 6000 */
            ],
            [
                'destiny' => 'El tejar / Cundinamarca',
                /* 'valor_flete' => 1200 */
            ],
            [
                'destiny' => 'Hato Grande / Cundinamarca',
                /* 'valor_flete' => 1200 */
            ],
            [
                'destiny' => 'Zipaquira / Cundinamarca',
                /* 'valor_flete' => 1200 */
            ],
            [
                'destiny' => 'Tenjo / Cundinamarca',
                /* 'valor_flete' => 1200 */
            ],
            [
                'destiny' => 'Tabio / Cundinamarca',
                /* 'valor_flete' => 1200 */
            ],
            [
                'destiny' => 'La punta / Cundinamarca',
                /* 'valor_flete' => 1200 */
            ],
            [
                'destiny' => 'Puente de piedra / Cundinamarca',
                /* 'valor_flete' => 1200 */
            ],
            [
                'destiny' => 'Cogua / Cundinamarca',
                /* 'valor_flete' => 1200 */
            ],
            [
                'destiny' => 'Soacha / Cundinamarca',
                /* 'valor_flete' => 1200 */
            ],
        ]);
    }
}
