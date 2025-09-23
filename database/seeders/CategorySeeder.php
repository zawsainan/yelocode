<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Technology & Innovation',
                'slug' => 'technology-innovation',
            ],
            [
                'name' => 'Artificial Intelligence',
                'slug' => 'artificial-intelligence',
            ],
            [
                'name' => 'Health & Wellness',
                'slug' => 'health-wellness',
            ],
            [
                'name' => 'Travel & Adventure',
                'slug' => 'travel-adventure',
            ],
            [
                'name' => 'Business & Finance',
                'slug' => 'business-finance',
            ],
        ];

        Category::insert($categories);
    }
}
