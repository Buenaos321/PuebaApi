<?php

namespace Database\Seeders;

use App\Models\persona;
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
        persona::factory(15)->create();
    }
}
