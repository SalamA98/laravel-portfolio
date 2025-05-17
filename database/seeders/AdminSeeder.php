<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate(
            ['email' => 'salam1998na@gmail.com'],
            [
                'name' => 'Salam Arida',
                'password' => '$12$EW7Uno5yhljnJ4WVcJpC5enAfn834IKIKXTSKKYYOAIOWF8JcHfxm',
            ]
        );
}
}
