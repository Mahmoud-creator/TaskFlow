<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run()
    {
        Attribute::create([
            'name' => 'department',
            'type' => 'text',
        ]);

        Attribute::create([
            'name' => 'start_date',
            'type' => 'date',
        ]);

        Attribute::create([
            'name' => 'budget',
            'type' => 'number',
        ]);
    }
}