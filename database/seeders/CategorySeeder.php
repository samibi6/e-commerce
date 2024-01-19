<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Electronics',
            'Clothing',
            'Books',
            'Home and Garden',
            'Sports and Outdoors',
            'Health and Beauty',
            'Toys and Games',
            'Automotive',
            'Food and Grocery',
            'Music and Movies'
        ];

        // Create Categories
        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category
            ]);
        }
    }
}
