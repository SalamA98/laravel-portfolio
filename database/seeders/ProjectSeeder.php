<?php

namespace Database\Seeders;
use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
        'title' => 'Portfolio Website',
        'category' => 'Web Development',
        'description' => 'A Laravel-based portfolio site.',
        'image' => 'project_images/portfolio.png',
        'link' => 'https://github.com/SalamA98/laravel-portfolio'
        ]);
    }
}
