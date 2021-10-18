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
            ->create();

        Product::factory()
            ->count(3)
            ->has(
                ProductReview::factory([
                    'user_id' => null
                ])
                    ->count(2)
            )
            ->create();

        User::factory()
            ->count(3)
            ->create();
    }
}
