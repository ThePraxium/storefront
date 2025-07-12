<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $events = [
            [
                'name' => 'Weekly Trivia Night',
                'description' => 'Test your knowledge in our weekly trivia competition! Teams of 4 max. Prizes for top 3 teams.',
                'date' => now()->addDays(3),
                'start_time' => '19:00:00',
                'end_time' => '21:30:00',
                'max_participants' => 40,
                'price' => 0.00,
                'type' => 'trivia',
            ],
            [
                'name' => 'Catan Tournament',
                'description' => 'Join our monthly Catan tournament! Entry includes dinner and a chance to win the grand prize.',
                'date' => now()->addDays(10),
                'start_time' => '14:00:00',
                'end_time' => '18:00:00',
                'max_participants' => 16,
                'price' => 25.00,
                'type' => 'tournament',
            ],
            [
                'name' => 'Family Game Day',
                'description' => 'Perfect for families! Learn new games with our expert game masters. Kid-friendly menu available.',
                'date' => now()->addDays(7),
                'start_time' => '11:00:00',
                'end_time' => '16:00:00',
                'max_participants' => null,
                'price' => 0.00,
                'type' => 'workshop',
            ],
            [
                'name' => 'D&D Campaign Night',
                'description' => 'Join our ongoing D&D campaign! New players welcome. Character sheets provided.',
                'date' => now()->addDays(5),
                'start_time' => '18:00:00',
                'end_time' => '22:00:00',
                'max_participants' => 6,
                'price' => 15.00,
                'type' => 'league',
            ],
            [
                'name' => 'Wine & Strategy Games',
                'description' => 'An evening of sophisticated strategy games paired with wine selections. 21+ only.',
                'date' => now()->addDays(14),
                'start_time' => '19:00:00',
                'end_time' => '23:00:00',
                'max_participants' => 20,
                'price' => 35.00,
                'type' => 'themed_dinner',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}