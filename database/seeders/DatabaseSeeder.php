<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // MANUAL USERS

        // \App\Models\User::create([
        //     'name' => 'Test Customer',
        //     'email' => 'TestCustomer@test.com',
        //     'password' => bcrypt('password')
        // ]);

        // \App\Models\User::create([
        //     'name' => 'Test Seller',
        //     'email' => 'TestSeller@test.com',
        //     'password' => bcrypt('password')
        // ]);

        // Create 25 users
        for ($i = 1; $i <= 25; $i++) {
            \App\Models\User::create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => bcrypt('password')
            ]);
        }

        $this->call([
            ArticleSeeder::class,
            CartSeeder::class,
            CategorySeeder::class,
            OrderSeeder::class,
            ReviewSeeder::class,
            SellerSeeder::class,
            StockSeeder::class,
            CustomerSeeder::class,
            CartDetailSeeder::class,
            OrderDetailSeeder::class
        ]);
    }
}
