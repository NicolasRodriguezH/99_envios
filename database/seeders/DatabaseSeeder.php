<?php

namespace Database\Seeders;

use App\Models\Statu;
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
        Statu::factory(24)->create();
    }
}
