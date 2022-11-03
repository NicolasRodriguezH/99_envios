<?php

namespace Database\Seeders;

use App\Models\Statu;
use App\Models\Status;
use App\Models\StatusGuide;
use Database\Factories\StatuFactory;
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
        // \App\Models\User::factory(10)->create();
        // StatusGuide::factory(24)->create();

        $this->call(StatusGuideSeeder::class);
        $this->call(OriginDestinySeeder::class);
    }
}
