<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = [
            [
                'code' => 'SEEC',
                'name' => 'Sorsogon Empire Eagles Club',
                'full_name' => 'Sorsogon Empire Eagles Club',
                'is_active' => true,
            ],
            [
                'code' => 'SEGEC',
                'name' => 'Sorsogon Empire Gubat Eagles Club',
                'full_name' => 'Sorsogon Empire Gubat Eagles Club',
                'is_active' => true,
            ],
            [
                'code' => 'SEJEC',
                'name' => 'Sorsogon Empire Juban Eagles Club',
                'full_name' => 'Sorsogon Empire Juban Eagles Club',
                'is_active' => true,
            ],
            [
                'code' => 'GEC',
                'name' => 'Gibalon Eagles Club',
                'full_name' => 'Gibalon Sorsogon Eagles Club',
                'is_active' => true,
            ],
            [
                'code' => 'MSEC',
                'name' => 'Metro Sorsogon Eagles Club',
                'full_name' => 'Metro Sorsogon Eagles Club',
                'is_active' => true,
            ],
            [
                'code' => 'SEC',
                'name' => 'Sorsogon Eagles Club',
                'full_name' => 'Sorsogon Eagles Club',
                'is_active' => true,
            ],
            [
                'code' => 'BEC',
                'name' => 'Bulan Eagles Club',
                'full_name' => 'Bulan Eagles Club',
                'is_active' => true,
            ],
            [
                'code' => 'SMEC',
                'name' => 'Sorsogon Magnificent Eagles Club',
                'full_name' => 'Sorsogon Magnificent Eagles Club',
                'is_active' => true,
            ],
        ];

        foreach ($clubs as $club) {
            Club::updateOrCreate(
                ['code' => $club['code']],
                $club
            );
        }
    }
}
