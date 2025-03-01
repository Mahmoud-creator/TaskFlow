<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
    public function run()
    {
        AttributeValue::create([
            'attribute_id' => 1, // department
            'entity_id' => 1, // Project A
            'value' => 'IT',
        ]);

        AttributeValue::create([
            'attribute_id' => 2, // start_date
            'entity_id' => 1, // Project A
            'value' => '2023-01-01',
        ]);

        AttributeValue::create([
            'attribute_id' => 1, // department
            'entity_id' => 2, // Project B
            'value' => 'HR',
        ]);
    }
}