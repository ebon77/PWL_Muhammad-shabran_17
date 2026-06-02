<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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

        $category1 = Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
        ]);

        $category2 = Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming',
        ]);

        $category3 = Category::create([
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
        ]);

        // Seed Tags
        $tagLaravel = Tag::create(['name' => 'Laravel']);
        $tagPHP = Tag::create(['name' => 'PHP']);
        $tagBackend = Tag::create(['name' => 'Backend']);
        $tagFlutter = Tag::create(['name' => 'Flutter']);
        $tagDart = Tag::create(['name' => 'Dart']);
        $tagMobile = Tag::create(['name' => 'Mobile']);
        $tagUIUX = Tag::create(['name' => 'UI/UX']);
        $tagDesign = Tag::create(['name' => 'Design']);
        $tagFigma = Tag::create(['name' => 'Figma']);

        // Seed Posts and attach Tags
        $post1 = Post::create([
            'title' => 'Belajar Laravel untuk Pemula',
            'slug' => 'belajar-laravel-untuk-pemula',
            'category_id' => $category1->id,
            'color' => '#3b82f6',
            'image' => 'posts/laravel.jpg',
            'body' => 'Laravel adalah framework PHP yang sangat populer untuk membangun aplikasi web modern.',
            'published' => true,
            'published_at' => now(),
        ]);
        $post1->tags()->attach([$tagLaravel->id, $tagPHP->id, $tagBackend->id]);

        $post2 = Post::create([
            'title' => 'Tutorial Flutter Dasar',
            'slug' => 'tutorial-flutter-dasar',
            'category_id' => $category2->id,
            'color' => '#10b981',
            'image' => 'posts/flutter.jpg',
            'body' => 'Flutter mempermudah pembuatan aplikasi mobile multiplatform dengan performa tinggi.',
            'published' => true,
            'published_at' => now(),
        ]);
        $post2->tags()->attach([$tagFlutter->id, $tagDart->id, $tagMobile->id]);

        $post3 = Post::create([
            'title' => 'Panduan Desain UI/UX Menarik',
            'slug' => 'panduan-desain-ui-ux-menarik',
            'category_id' => $category3->id,
            'color' => '#f59e0b',
            'image' => 'posts/uiux.jpg',
            'body' => 'Desain UI/UX yang baik mengutamakan kegunaan dan kenyamanan pengguna.',
            'published' => false,
            'published_at' => now(),
        ]);
        $post3->tags()->attach([$tagUIUX->id, $tagDesign->id, $tagFigma->id]);
    }
}
