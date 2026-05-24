<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::create([
            'name' => 'Usman',
            'email' => 'usman@example.com',
            'password' => bcrypt('123456')
        ]);

        Person::create([
            'name' => 'Ali',
            'email' => 'ali@example.com',
            'password' => bcrypt('123456')
        ]);
    }
}
