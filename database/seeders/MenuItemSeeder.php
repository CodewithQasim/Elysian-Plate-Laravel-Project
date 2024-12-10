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
    {$menuItems = [
        [
            'name' => 'Chicken Biryani',
            'price' => 400,
            'category_id' => 1,
            'image' => 'images/chicken-biryani.jpg'
        ],
        [
            'name' => 'Chicken Karahi',
            'price' => 450,
            'category_id' => 1,
            'image' => 'images/chicken-karahi.jpg'
        ],
        [
            'name' => 'Beef Nihari',
            'price' => 550,
            'category_id' => 1,
            'image' => 'images/beef-nihari.jpg'
        ],
        [
            'name' => 'Chicken Jalfrezi',
            'price' => 400,
            'category_id' => 1,
            'image' => 'images/chicken-jalfrezi.jpg'
        ],
        [
            'name' => 'Chicken Korma',
            'price' => 450,
            'category_id' => 1,
            'image' => 'images/chicken-korma.jpg'
        ],
        [
            'name' => 'Chicken Bar B Que',
            'price' => 600,
            'category_id' => 1,
            'image' => 'images/chicken-bar-b-que.jpg'
        ],
        [
            'name' => 'Haleem',
            'price' => 500,
            'category_id' => 1,
            'image' => 'images/haleem.jpg'
        ],
        [
            'name' => 'Nihari',
            'price' => 550,
            'category_id' => 1,
            'image' => 'images/nihari.jpg'
        ],
        [
            'name' => 'Samosas (2 pieces)',
            'price' => 80,
            'category_id' => 2,
            'image' => 'images/samosas.jpg'
        ],
        [
            'name' => 'Pakoras',
            'price' => 100,
            'category_id' => 2,
            'image' => 'images/pakoras.jpg'
        ],
        [
            'name' => 'Chaat',
            'price' => 100,
            'category_id' => 2,
            'image' => 'images/chaat.jpg'
        ],
        [
            'name' => 'Chicken Corn Soup',
            'price' => 250,
            'category_id' => 3,
            'image' => 'images/chicken-corn-soup.jpg'
        ],
        [
            'name' => 'Cream of Mushroom Soup',
            'price' => 250,
            'category_id' => 3,
            'image' => 'images/cream-of-mushroom-soup.jpg'
        ],
        [
            'name' => 'Kheer',
            'price' => 150,
            'category_id' => 4,
            'image' => 'images/kheer.jpg'
        ],
        [
            'name' => 'Gulab Jamun',
            'price' => 200,
            'category_id' => 4,
            'image' => 'images/gulab-jamun.jpg'
        ],
        [
            'name' => 'Dark Hot Chocolate',
            'price' => 100,
            'category_id' => 5,
            'image' => 'images/dark-hot-chocolate.jpg'
        ],
        [
            'name' => 'Brewed Coffee',
            'price' => 80,
            'category_id' => 5,
            'image' => 'images/brewed-coffee.jpg'
        ],
        [
            'name' => 'Cherry Smoothie',
            'price' => 200,
            'category_id' => 5,
            'image' => 'images/cherry-smoothie.jpg'
        ],
        [
            'name' => 'Mango Smoothie',
            'price' => 200,
            'category_id' => 5,
            'image' => 'images/mango-smoothie.jpg'
        ],
        [
            'name' => 'Royal Chocolate Cake',
            'price' => 1000,
            'category_id' => 6,
            'image' => 'images/royal-chocolate-cake.jpg'
        ],
        [
            'name' => 'Housemade Granola',
            'price' => 1000,
            'category_id' => 6,
            'image' => 'images/housemade-granola.jpg'
        ],
    ];

        foreach ($menuItems as $item) {
            MenuItem::create($item);
        }
    }
}
