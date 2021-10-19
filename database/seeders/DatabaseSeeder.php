<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->has(
                ProductReview::factory([
                    'user_id' => null,
                    'rating' => 4.0,
                    'review_text' => 'book was full of fluff',
                ])
            )
            ->has(
                ProductReview::factory([
                    'user_id' => null,
                    'rating' => 3.0,
                    'review_text' => 'book was fluff',
                ])
            )
            ->has(
                ProductReview::factory([
                    'user_id' => null,
                    'rating' => 4.0,
                    'review_text' => 'book was amazing',
                ])
            )
            ->state([
                'name' => 'The Minimalist Entrepreneur'
            ])
            ->create();
    }
}
