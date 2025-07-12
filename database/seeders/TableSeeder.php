<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $tables = [
            [
                'name' => 'Cozy Corner - Table 1',
                'capacity' => 2,
                'hourly_rate' => 8.00,
                'description' => 'Perfect for couples or intimate gaming sessions.',
            ],
            [
                'name' => 'Cozy Corner - Table 2',
                'capacity' => 2,
                'hourly_rate' => 8.00,
                'description' => 'Perfect for couples or intimate gaming sessions.',
            ],
            [
                'name' => 'Standard Table - A1',
                'capacity' => 4,
                'hourly_rate' => 12.00,
                'description' => 'Great for small groups and most board games.',
            ],
            [
                'name' => 'Standard Table - A2',
                'capacity' => 4,
                'hourly_rate' => 12.00,
                'description' => 'Great for small groups and most board games.',
            ],
            [
                'name' => 'Standard Table - A3',
                'capacity' => 4,
                'hourly_rate' => 12.00,
                'description' => 'Great for small groups and most board games.',
            ],
            [
                'name' => 'Large Table - B1',
                'capacity' => 6,
                'hourly_rate' => 18.00,
                'description' => 'Spacious table for larger groups and complex games.',
            ],
            [
                'name' => 'Large Table - B2',
                'capacity' => 6,
                'hourly_rate' => 18.00,
                'description' => 'Spacious table for larger groups and complex games.',
            ],
            [
                'name' => 'Premium Suite',
                'capacity' => 8,
                'hourly_rate' => 25.00,
                'description' => 'Our premium gaming suite with comfortable seating and dedicated service.',
            ],
            [
                'name' => 'Party Room',
                'capacity' => 12,
                'hourly_rate' => 40.00,
                'description' => 'Perfect for birthday parties, corporate events, and large gatherings.',
            ],
        ];

        foreach ($tables as $table) {
            Table::create($table);
        }
    }
}