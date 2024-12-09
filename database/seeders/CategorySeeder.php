<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['id' => 1, 'name' => 'Main Course'],
            ['id' => 2, 'name' => 'Appetizer'],
            ['id' => 3, 'name' => 'Soups'],
            ['id' => 4, 'name' => 'Dessert'],
            ['id' => 5, 'name' => 'Drinks'],
            ['id' => 6, 'name' => 'Our Speciality'],
        ];

        foreach ($categories as $category) {
            Category::create($category); // Automatically handles both id and name
        }
    }
}