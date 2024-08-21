<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraphs(3, true),
            ]);
        }
    }
}
