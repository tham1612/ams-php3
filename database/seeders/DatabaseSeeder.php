<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\catagory;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();
//
//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
        Tag::factory(15)->create();
//        $this->call([
//
//
//            CategorySeeder::class,
//            CatagorySeeder::class,
//
//            AuthorSeed::class,
//            PostSeeder::class,
//
//
//        ]);
    }
}
