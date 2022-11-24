<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\StatusGuide;
use App\Models\TipoEnvio;
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
        $this->call(StatusGuideSeeder::class);
        $this->call(OriginSeeder::class);
        $this->call(DestinySeeder::class);
        $this->call(TipoEnvioSeeder::class);
    }
}
