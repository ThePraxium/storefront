<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $menuItems = [
            // Snacks
            [
                'name' => 'Loaded Nachos',
                'description' => 'Crispy tortilla chips topped with cheese, jalapeños, sour cream, and salsa.',
                'category' => 'Snacks',
                'price' => 12.99,
                'allergens' => ['dairy', 'gluten'],
            ],
            [
                'name' => 'Mozzarella Sticks',
                'description' => 'Golden fried mozzarella sticks served with marinara sauce.',
                'category' => 'Snacks',
                'price' => 8.99,
                'allergens' => ['dairy', 'gluten'],
            ],
            [
                'name' => 'Buffalo Wings',
                'description' => 'Spicy buffalo wings served with celery sticks and blue cheese dip.',
                'category' => 'Snacks',
                'price' => 14.99,
                'allergens' => ['dairy'],
            ],

            // Entrées
            [
                'name' => 'Gamer\'s Burger',
                'description' => 'Juicy beef patty with cheese, lettuce, tomato, and our special sauce on a brioche bun.',
                'category' => 'Entrées',
                'price' => 16.99,
                'allergens' => ['gluten', 'dairy'],
            ],
            [
                'name' => 'Margherita Pizza',
                'description' => 'Classic pizza with fresh mozzarella, basil, and tomato sauce.',
                'category' => 'Entrées',
                'price' => 15.99,
                'allergens' => ['gluten', 'dairy'],
            ],
            [
                'name' => 'Chicken Caesar Wrap',
                'description' => 'Grilled chicken, romaine lettuce, parmesan, and caesar dressing in a flour tortilla.',
                'category' => 'Entrées',
                'price' => 13.99,
                'allergens' => ['gluten', 'dairy'],
            ],

            // Shareables
            [
                'name' => 'Game Night Platter',
                'description' => 'Perfect for sharing! Includes wings, mozzarella sticks, onion rings, and dipping sauces.',
                'category' => 'Shareables',
                'price' => 28.99,
                'allergens' => ['gluten', 'dairy'],
            ],
            [
                'name' => 'Pretzel Bites',
                'description' => 'Warm soft pretzel bites served with cheese sauce and honey mustard.',
                'category' => 'Shareables',
                'price' => 9.99,
                'allergens' => ['gluten', 'dairy'],
            ],

            // Drinks
            [
                'name' => 'Craft Root Beer Float',
                'description' => 'Creamy vanilla ice cream in our house-made root beer.',
                'category' => 'Drinks',
                'price' => 6.99,
                'allergens' => ['dairy'],
            ],
            [
                'name' => 'Iced Coffee',
                'description' => 'Cold brew coffee served over ice with your choice of milk.',
                'category' => 'Drinks',
                'price' => 4.99,
                'allergens' => [],
            ],
            [
                'name' => 'Fruit Smoothie',
                'description' => 'Blended fresh fruits with yogurt and honey.',
                'category' => 'Drinks',
                'price' => 7.99,
                'allergens' => ['dairy'],
            ],

            // Desserts
            [
                'name' => 'Chocolate Lava Cake',
                'description' => 'Warm chocolate cake with a molten center, served with vanilla ice cream.',
                'category' => 'Desserts',
                'price' => 8.99,
                'allergens' => ['gluten', 'dairy', 'eggs'],
            ],
            [
                'name' => 'Board Game Cookies',
                'description' => 'Sugar cookies shaped like dice, meeples, and other game pieces.',
                'category' => 'Desserts',
                'price' => 5.99,
                'allergens' => ['gluten', 'dairy', 'eggs'],
            ],
        ];

        foreach ($menuItems as $item) {
            MenuItem::create($item);
        }
    }
}