<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Timesheet;
use Illuminate\Database\Seeder;

class TimesheetSeeder extends Seeder
{
    public function run()
    {
        Timesheet::create([
            'task_name' => 'Design UI',
            'date' => '2023-10-01',
            'hours' => 5,
            'user_id' => 1,
            'project_id' => 1,
        ]);

        Timesheet::create([
            'task_name' => 'Develop Backend',
            'date' => '2023-10-02',
            'hours' => 8,
            'user_id' => 2,
            'project_id' => 2,
        ]);
    }
}