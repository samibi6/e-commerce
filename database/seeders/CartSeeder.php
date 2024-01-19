<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Cart::create([
            'customer_id' => 1,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
        \App\Models\Cart::create([
            'customer_id' => 2,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
        \App\Models\Cart::create([
            'customer_id' => 3,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
        \App\Models\Cart::create([
            'customer_id' => 4,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
        \App\Models\Cart::create([
            'customer_id' => 5,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
        \App\Models\Cart::create([
            'customer_id' => 6,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
        \App\Models\Cart::create([
            'customer_id' => 7,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
        \App\Models\Cart::create([
            'customer_id' => 8,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
        \App\Models\Cart::create([
            'customer_id' => 9,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
        \App\Models\Cart::create([
            'customer_id' => 10,
            'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
            'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
        ]);
    }
}
