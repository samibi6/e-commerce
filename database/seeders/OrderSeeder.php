<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            \App\Models\Order::create([
                'customer_id' => rand(1, 12),
                'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
                'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
            ]);
        }
    }
}
