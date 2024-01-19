<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\CartDetail::create([
        //     'cart_id' => 1,
        //     'article_id' => 1,
        //     'quantity' => 4,
        // ]);

        // Cart Details Seeder 1-10
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                $seeders[] = [
                    'cart_id' => $i,
                    'article_id' => rand(1, 30),
                    'quantity' => rand(1, 5),
                ];
            }
        }

        foreach ($seeders as $seeder) {
            // Utilisez la méthode create pour créer une nouvelle instance du modèle et l'insérer dans la base de données
            \App\Models\CartDetail::create([
                'cart_id' => $seeder['cart_id'],
                'article_id' => $seeder['article_id'],
                'quantity' => $seeder['quantity'],
            ]);
        }
    }
}
