<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'person_id' => 1,
            'title' => 'Complete Laravel API',
            'description' => 'Finish CRUD APIs',
            'is_completed' => false
        ]);

        Task::create([
            'person_id' => 2,
            'title' => 'Learn Seeders',
            'description' => 'Understand database seeding',
            'is_completed' => true
        ]);
    }
}
