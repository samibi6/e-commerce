<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                \App\Models\OrderDetail::create([
                    'order_id' => $i,
                    'article_id' => rand(1, 30),
                    'quantity' => rand(1, 5)
                ]);
            }
        }
    }
}
