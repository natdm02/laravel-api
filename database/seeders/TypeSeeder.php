<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create(['name' => 'Full-stack']);
        Type::create(['name' => 'Front-end']);
        Type::create(['name' => 'Back-end']);
        Type::create(['name' => 'Database']);
    }
}
