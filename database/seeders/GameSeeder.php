<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $games = [
            [
                'name' => 'Catan',
                'description' => 'Build settlements, cities, and roads to become the dominant force on the island of Catan.',
                'genre' => 'Strategy',
                'min_players' => 3,
                'max_players' => 4,
                'age_range' => '10+',
                'difficulty' => 'Medium',
                'rental_price' => 8.00,
                'purchase_price' => 45.99,
                'stock_quantity' => 5,
            ],
            [
                'name' => 'Ticket to Ride',
                'description' => 'Collect train cards and claim railway routes across the country in this railway-themed board game.',
                'genre' => 'Strategy',
                'min_players' => 2,
                'max_players' => 5,
                'age_range' => '8+',
                'difficulty' => 'Easy',
                'rental_price' => 7.00,
                'purchase_price' => 39.99,
                'stock_quantity' => 4,
            ],
            [
                'name' => 'Azul',
                'description' => 'Create beautiful tile patterns in this award-winning abstract strategy game.',
                'genre' => 'Abstract',
                'min_players' => 2,
                'max_players' => 4,
                'age_range' => '8+',
                'difficulty' => 'Medium',
                'rental_price' => 6.00,
                'purchase_price' => 34.99,
                'stock_quantity' => 3,
            ],
            [
                'name' => 'Wingspan',
                'description' => 'Attract birds to your wildlife preserves in this beautiful engine-building game.',
                'genre' => 'Engine Building',
                'min_players' => 1,
                'max_players' => 5,
                'age_range' => '10+',
                'difficulty' => 'Medium',
                'rental_price' => 9.00,
                'purchase_price' => 55.99,
                'stock_quantity' => 2,
            ],
            [
                'name' => 'Splendor',
                'description' => 'Collect gems and build your jewelry empire in this quick-playing engine builder.',
                'genre' => 'Engine Building',
                'min_players' => 2,
                'max_players' => 4,
                'age_range' => '10+',
                'difficulty' => 'Easy',
                'rental_price' => 5.00,
                'purchase_price' => 29.99,
                'stock_quantity' => 6,
            ],
            [
                'name' => 'Gloomhaven',
                'description' => 'Epic dungeon-crawling adventure with legacy elements and tactical combat.',
                'genre' => 'Adventure',
                'min_players' => 1,
                'max_players' => 4,
                'age_range' => '14+',
                'difficulty' => 'Expert',
                'rental_price' => 15.00,
                'purchase_price' => 139.99,
                'stock_quantity' => 1,
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}