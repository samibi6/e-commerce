<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Customer::create([
        //     'user_id' => 1
        // ]);

        // Create 13 Customers
        for ($i = 1; $i <= 12; $i++) {
            \App\Models\Customer::create([
                'user_id' => $i
            ]);
        }
    }
}
