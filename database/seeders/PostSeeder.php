<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'category_id' => 1,
                'title' => 'Latest Tech Trends',
                'color' => '#1abc9c',
                'slug' => 'latest-tech-trends',
                'content' => 'An overview of new technology trends in 2025.',
                'tags' => json_encode(['innovation', 'AI', 'gadgets']),
                'thumbnail' => 'tech1.jpg',
                'published' => true,
            ],
            [
                'category_id' => 2,
                'title' => 'Health Benefits of Yoga',
                'color' => '#e74c3c',
                'slug' => 'health-benefits-yoga',
                'content' => 'Discover how yoga improves physical and mental health.',
                'tags' => json_encode(['fitness', 'wellness', 'yoga']),
                'thumbnail' => 'health1.jpg',
                'published' => true,
            ],
            [
                'category_id' => 3,
                'title' => 'Backpacking Through Europe',
                'color' => '#9b59b6',
                'slug' => 'backpacking-europe',
                'content' => 'Tips for economical backpacking adventures in Europe.',
                'tags' => json_encode(['travel', 'europe', 'budget']),
                'thumbnail' => 'travel1.jpg',
                'published' => false,
            ],
            [
                'category_id' => 4,
                'title' => 'Easy Vegan Recipes',
                'color' => '#2ecc71',
                'slug' => 'easy-vegan-recipes',
                'content' => 'Delicious vegan recipes for beginners.',
                'tags' => json_encode(['food', 'vegan', 'recipe']),
                'thumbnail' => 'food1.jpg',
                'published' => true,
            ],
            [
                'category_id' => 5,
                'title' => 'Study Tips for Exams',
                'color' => '#f39c12',
                'slug' => 'study-tips-exams',
                'content' => 'Helpful strategies for students to prepare for exams.',
                'tags' => json_encode(['education', 'studying', 'exam']),
                'thumbnail' => 'education1.jpg',
                'published' => false,
            ],
            [
                'category_id' => 1,
                'title' => 'Best Programming Languages',
                'color' => '#34495e',
                'slug' => 'best-programming-languages',
                'content' => 'Comparing the top programming languages in 2025.',
                'tags' => json_encode(['technology', 'coding', 'programming']),
                'thumbnail' => 'tech2.jpg',
                'published' => true,
            ],
            [
                'category_id' => 2,
                'title' => 'Nutrition for Athletes',
                'color' => '#8e44ad',
                'slug' => 'nutrition-for-athletes',
                'content' => 'A guide to proper nutrition for sports people.',
                'tags' => json_encode(['health', 'nutrition', 'sports']),
                'thumbnail' => 'health2.jpg',
                'published' => false,
            ],
            [
                'category_id' => 3,
                'title' => 'Solo Travel Safety',
                'color' => '#e67e22',
                'slug' => 'solo-travel-safety',
                'content' => 'How to stay safe when traveling alone.',
                'tags' => json_encode(['travel', 'safety', 'solo']),
                'thumbnail' => 'travel2.jpg',
                'published' => true,
            ],
            [
                'category_id' => 4,
                'title' => 'Exploring Asian Cuisine',
                'color' => '#d35400',
                'slug' => 'exploring-asian-cuisine',
                'content' => 'The best dishes and flavors from Asia.',
                'tags' => json_encode(['food', 'asian', 'cuisine']),
                'thumbnail' => 'food2.jpg',
                'published' => false,
            ],
            [
                'category_id' => 5,
                'title' => 'Online Learning Platforms',
                'color' => '#27ae60',
                'slug' => 'online-learning-platforms',
                'content' => 'Review of the best online platforms for learning in 2025.',
                'tags' => json_encode(['education', 'online', 'learning']),
                'thumbnail' => 'education2.jpg',
                'published' => true,
            ],
        ];

        Post::insert($posts);
    }
}
