<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Team Meeting',
            'description' => 'Weekly team sync meeting',
            'start_date' => now()->addDays(2)->setTime(10, 0),
            'end_date' => now()->addDays(2)->setTime(11, 0),
            'all_day' => false,
            'location' => 'Conference Room A',
            'color' => '#3b82f6',
        ]);

        Event::create([
            'title' => 'Project Deadline',
            'description' => 'Final submission for Q1 project',
            'start_date' => now()->addDays(5),
            'end_date' => null,
            'all_day' => true,
            'location' => null,
            'color' => '#ef4444',
        ]);

        Event::create([
            'title' => 'Client Presentation',
            'description' => 'Present new features to client',
            'start_date' => now()->addDays(7)->setTime(14, 0),
            'end_date' => now()->addDays(7)->setTime(15, 30),
            'all_day' => false,
            'location' => 'Virtual Meeting',
            'color' => '#10b981',
        ]);

        Event::create([
            'title' => 'Company Picnic',
            'description' => 'Annual company picnic event',
            'start_date' => now()->addDays(14)->setTime(11, 0),
            'end_date' => now()->addDays(14)->setTime(17, 0),
            'all_day' => false,
            'location' => 'Central Park',
            'color' => '#f59e0b',
        ]);

        Event::create([
            'title' => 'Training Workshop',
            'description' => 'New employee orientation workshop',
            'start_date' => now()->addDays(10)->setTime(9, 0),
            'end_date' => now()->addDays(10)->setTime(12, 0),
            'all_day' => false,
            'location' => 'Training Room',
            'color' => '#8b5cf6',
        ]);
    }
}
