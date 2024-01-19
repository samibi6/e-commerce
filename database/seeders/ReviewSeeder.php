<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            $rating = $this->getRatingFromDescription();

            \App\Models\Review::create([
                'customer_id' => rand(1, 12),
                'article_id' => rand(1, 30),
                'rating' => $rating,
                'description' => 'Review for Article ' . rand(1, 30) . ': ' . $this->getDescriptionByRating($rating),
                'created_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60)),
                'updated_at' => Carbon::now()->subDays(rand(1, 500))->subHours(rand(1, 24))->subMinutes(rand(1, 60))
            ]);
        }
    }

    // Fonction pour générer le rating en fonction de la description
    private function getRatingFromDescription()
    {
        // Ici, vous pouvez mettre en place une logique plus complexe pour déterminer le rating en fonction de la description.
        // Dans cet exemple, on choisit aléatoirement entre 1 et 5.
        return rand(1, 5);
    }

    // Fonction pour générer des descriptions en fonction du rating
    private function getDescriptionByRating($rating)
    {
        switch ($rating) {
            case 1:
                return 'Bad Article, do not buy';
            case 2:
                return 'Not satisfied with the quality';
            case 3:
                return 'Average product, nothing special';
            case 4:
                return 'Great value for money';
            case 5:
                return 'Perfect product, exceeded my expectations';
            default:
                return 'Average product, nothing special';
        }
    }

    // public function run(): void
    // {
    //     \App\Models\Review::create([
    //         'customer_id' => 1,
    //         'article_id' => 1,
    //         'rating' => 2,
    //         'description' => 'Bad Article, do not buy'
    //     ]);
    // }
}
