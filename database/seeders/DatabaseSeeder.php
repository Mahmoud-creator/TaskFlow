<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProjectSeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            TimesheetSeeder::class,
        ]);
    }
}