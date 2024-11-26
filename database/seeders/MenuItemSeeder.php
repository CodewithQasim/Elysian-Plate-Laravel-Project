<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuItems = [
            // Main Dishes
            [
                'name' => 'Chicken Biryani',
                'description' => 'Spicy and flavorful chicken biryani.',
                'price' => 400,
                'category' => 'main',
            ],
            [
                'name' => 'Chicken Karahi',
                'description' => 'Delicious and creamy chicken karahi.',
                'price' => 450,
                'category' => 'main',
            ],
            [
                'name' => 'Beef Nihari',
                'description' => 'Rich and tender beef nihari.',
                'price' => 550,
                'category' => 'main',
            ],
            [
                'name' => 'Chicken Jalfrezi',
                'description' => 'Tangy and spicy chicken jalfrezi.',
                'price' => 400,
                'category' => 'main',
            ],
            [
                'name' => 'Chicken Korma',
                'description' => 'Traditional and aromatic chicken korma.',
                'price' => 450,
                'category' => 'main',
            ],
            [
                'name' => 'Chicken Bar B Que',
                'description' => 'Perfectly grilled chicken BBQ.',
                'price' => 600,
                'category' => 'main',
            ],
            [
                'name' => 'Haleem',
                'description' => 'Rich and flavorful haleem.',
                'price' => 500,
                'category' => 'main',
            ],
            [
                'name' => 'Nihari',
                'description' => 'Delicious and spicy nihari.',
                'price' => 550,
                'category' => 'main',
            ],
            // Appetizers
            [
                'name' => 'Samosas (2 pieces)',
                'description' => 'Crispy and spicy samosas.',
                'price' => 80,
                'category' => 'appetizer',
            ],
            [
                'name' => 'Pakoras',
                'description' => 'Golden fried pakoras.',
                'price' => 100,
                'category' => 'appetizer',
            ],
            [
                'name' => 'Chaat',
                'description' => 'Tangy and flavorful chaat.',
                'price' => 100,
                'category' => 'appetizer',
            ],
            // Soups
            [
                'name' => 'Chicken Corn Soup',
                'description' => 'Warm and comforting chicken corn soup.',
                'price' => 250,
                'category' => 'Soups',
            ],
            [
                'name' => 'Cream of Mushroom Soup',
                'description' => 'Rich and creamy mushroom soup.',
                'price' => 250,
                'category' => 'Soups',
            ],
            // Desserts
            [
                'name' => 'Kheer',
                'description' => 'Sweet and creamy rice pudding.',
                'price' => 150,
                'category' => 'dessert',
            ],
            [
                'name' => 'Gulab Jamun',
                'description' => 'Soft and syrupy gulab jamun.',
                'price' => 200,
                'category' => 'dessert',
            ],
            // Drinks
            [
                'name' => 'Dark Hot Chocolate',
                'description' => 'Rich and velvety dark hot chocolate.',
                'price' => 100,
                'category' => 'Drinks',
            ],
            [
                'name' => 'Brewed Coffee',
                'description' => 'Freshly brewed coffee.',
                'price' => 80,
                'category' => 'Drinks',
            ],
            [
                'name' => 'Cherry Smoothie',
                'description' => 'Refreshing cherry smoothie.',
                'price' => 200,
                'category' => 'Drinks',
            ],
            [
                'name' => 'Mango Smoothie',
                'description' => 'Tropical mango smoothie.',
                'price' => 200,
                'category' => 'Drinks',
            ],
            // Our Speciality
            [
                'name' => 'Royal Chocolate Cake',
                'description' => 'Decadent chocolate cake with royal icing.',
                'price' => 1000,
                'category' => 'Our Speciality',
            ],
            [
                'name' => 'Housemade Granola',
                'description' => 'Healthy and nutritious housemade granola.',
                'price' => 1000,
                'category' => 'Our Speciality',
            ],
        ];

        foreach ($menuItems as $item) {
            MenuItem::create($item);
        }
    }
}
