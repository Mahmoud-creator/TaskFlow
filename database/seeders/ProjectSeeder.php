<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Project A',
            'status' => 'active',
        ]);

        Project::create([
            'name' => 'Project B',
            'status' => 'inactive',
        ]);
    }
}