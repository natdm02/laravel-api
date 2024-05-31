<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_technologies = [
            'HTML',
            'CSS',
            'Javascript',
            'Vue',
            'Vite',
            'SCSS',
            'NodeJS',
            'PHP',
            'SQL',
            'Laravel',
        ];

        foreach ($project_technologies as $technology) {
            $new_technology       = new Technology();
            $new_technology->name = $technology;
            $new_technology->slug = Str::slug($technology, '-');

            $new_technology->save();
        }
    }
}
