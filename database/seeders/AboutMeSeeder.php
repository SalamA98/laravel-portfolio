<?php

namespace Database\Seeders;
use App\Models\AboutMe;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutMeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            AboutMe::create([
            'subtitle' => 'Who Am I?',
            'title' => 'About Me',
            'description' => 'I’m a Computer Engineer with experience in product ownership and manual testing. I love building software that solves real problems.',
            'image' => 'about_images/default.png',
            'cv' => 'cvs/default_cv.pdf',        
        ]);
    }
}
