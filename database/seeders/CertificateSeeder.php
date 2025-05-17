<?php

namespace Database\Seeders;
use App\Models\Certificate;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certificate::create([
        'title' => 'HTML Course',
        'issuer' => 'Sololearn',
        'file' => 'certificates/html_course.jpg',
        'date' => '2022-03-24',
    ]);
    }
}
