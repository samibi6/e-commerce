<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Seller::create([
        //     'user_id' => 2
        // ]);

        // Create 12 Sellers
        for ($i = 1; $i <= 12; $i++) {
            \App\Models\Seller::create([
                'user_id' => $i
            ]);
        }
    }
}