<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Article::create(
            [
                'seller_id' => 1,
                'category_id' => 1,
                'name' => 'Smartphone XYZ',
                'description' => 'Powerful smartphone with advanced features',
                'price' => 599.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 2,
                'category_id' => 2,
                'name' => 'Men\'s Casual Jacket',
                'description' => 'Stylish jacket for a casual look',
                'price' => 89.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 3,
                'category_id' => 3,
                'name' => 'Bestseller Novel',
                'description' => 'Compelling novel with intriguing plot twists',
                'price' => 24.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 4,
                'category_id' => 4,
                'name' => 'Modern Coffee Table',
                'description' => 'Sleek design coffee table for your living room',
                'price' => 149.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 5,
                'category_id' => 5,
                'name' => 'Outdoor Camping Tent',
                'description' => 'Durable tent for your camping adventures',
                'price' => 129.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 6,
                'category_id' => 6,
                'name' => 'Anti-Aging Skincare Kit',
                'description' => 'Revitalize your skin with this skincare set',
                'price' => 79.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 7,
                'category_id' => 7,
                'name' => 'Board Game - Strategy Edition',
                'description' => 'Engaging strategy board game for family fun',
                'price' => 34.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 8,
                'category_id' => 8,
                'name' => 'Car Battery Charger',
                'description' => 'Powerful charger for your vehicle\'s battery',
                'price' => 49.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 9,
                'category_id' => 9,
                'name' => 'Organic Pasta Set',
                'description' => 'Delicious organic pasta made from premium ingredients',
                'price' => 5.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 10,
                'category_id' => 10,
                'name' => 'Classic Vinyl Record Collection',
                'description' => 'Timeless collection of classic vinyl records',
                'price' => 69.99
            ]
        );

        \App\Models\Article::create(
            [
                'seller_id' => 1,
                'category_id' => 1,
                'name' => 'Wireless Noise-Canceling Headphones',
                'description' => 'Immerse yourself in music with these high-quality headphones',
                'price' => 179.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 2,
                'category_id' => 2,
                'name' => 'Women\'s Elegant Evening Dress',
                'description' => 'Turn heads with this elegant dress for special occasions',
                'price' => 129.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 3,
                'category_id' => 3,
                'name' => 'Educational Children\'s Book Set',
                'description' => 'Inspire young minds with this educational book collection',
                'price' => 39.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 4,
                'category_id' => 4,
                'name' => 'Indoor Plants Variety Pack',
                'description' => 'Bring nature indoors with a variety of beautiful houseplants',
                'price' => 49.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 5,
                'category_id' => 5,
                'name' => 'Professional Soccer Ball',
                'description' => 'Enhance your soccer game with this high-performance ball',
                'price' => 24.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 6,
                'category_id' => 6,
                'name' => 'Luxury Fragrance Gift Set',
                'description' => 'Indulge in a collection of premium fragrances',
                'price' => 89.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 7,
                'category_id' => 7,
                'name' => 'Interactive Robot Toy for Kids',
                'description' => 'Provide hours of entertainment with this fun and educational robot',
                'price' => 54.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 8,
                'category_id' => 8,
                'name' => 'Car Windshield Wipers Set',
                'description' => 'Ensure clear visibility on the road with these durable wipers',
                'price' => 19.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 9,
                'category_id' => 9,
                'name' => 'Gourmet Chocolate Assortment',
                'description' => 'Indulge in a variety of premium chocolates from around the world',
                'price' => 29.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 10,
                'category_id' => 10,
                'name' => 'Concert Blu-ray Collection',
                'description' => 'Experience live performances with this collection of concert Blu-rays',
                'price' => 44.99
            ]
        );

        \App\Models\Article::create(
            [
                'seller_id' => 1,
                'category_id' => 1,
                'name' => '4K Ultra HD Smart TV',
                'description' => 'Immerse yourself in stunning visuals with this smart TV',
                'price' => 799.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 2,
                'category_id' => 2,
                'name' => 'Men\'s Waterproof Winter Jacket',
                'description' => 'Stay warm and dry in style with this winter jacket',
                'price' => 149.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 3,
                'category_id' => 3,
                'name' => 'Historical Fiction Bestseller',
                'description' => 'Transport yourself to another era with this captivating novel',
                'price' => 29.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 4,
                'category_id' => 4,
                'name' => 'Smart Home Security Camera System',
                'description' => 'Ensure the safety of your home with this advanced camera system',
                'price' => 199.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 5,
                'category_id' => 5,
                'name' => 'Fitness Tracker Watch',
                'description' => 'Track your fitness goals with this sleek and reliable smartwatch',
                'price' => 79.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 6,
                'category_id' => 6,
                'name' => 'Luxury Spa Gift Set',
                'description' => 'Pamper yourself or a loved one with this indulgent spa set',
                'price' => 69.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 7,
                'category_id' => 7,
                'name' => 'Educational STEM Building Blocks',
                'description' => 'Encourage creativity and learning with these building blocks',
                'price' => 39.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 8,
                'category_id' => 8,
                'name' => 'Car Jump Starter Kit',
                'description' => 'Never worry about a dead battery with this reliable jump starter',
                'price' => 69.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 9,
                'category_id' => 9,
                'name' => 'Organic Superfood Smoothie Mix',
                'description' => 'Boost your health with this nutrient-packed smoothie mix',
                'price' => 14.99
            ]
        );
        \App\Models\Article::create(
            [
                'seller_id' => 10,
                'category_id' => 10,
                'name' => 'Classic Rock Vinyl Collection',
                'description' => 'Expand your vinyl collection with these iconic rock albums',
                'price' => 59.99
            ]
        );

        \App\Models\Article::create(
            [
                'seller_id' => 1,
                'category_id' => 1,
                'name' => 'Apple Watch',
                'description' => 'Connected Watch',
                'price' => 399.99
            ]
        );
    }
}
