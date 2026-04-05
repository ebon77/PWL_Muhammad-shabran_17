<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::create([
        'name' => 'Web Development',
        'slug' => 'web-development',
        ]);

        Category::create([
        'name' => 'Mobile Programming',
        'slug' => 'mobile-programming',
        ]);

        Category::create([
        'name' => 'UI/UX Design',
        'slug' => 'ui-ux-design',
        ]);
    }
}
