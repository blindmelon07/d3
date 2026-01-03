<?php

namespace Database\Seeders;

use App\Models\Meeting;
use Illuminate\Database\Seeder;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meeting::create([
            'name' => 'Board Meeting',
            'meeting_date' => now()->addDays(7),
            'meeting_minutes' => 'Discuss quarterly goals and budget planning.',
        ]);

        Meeting::create([
            'name' => 'General Assembly',
            'meeting_date' => now()->addDays(14),
            'meeting_minutes' => 'Annual general meeting for all members.',
        ]);

        Meeting::create([
            'name' => 'Committee Meeting',
            'meeting_date' => now()->addDays(3),
            'meeting_minutes' => 'Review membership applications and event planning.',
        ]);
    }
}
