<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();



        for ($i = 0; $i < 100; $i++) {
            $name = fake()->text(100);
            $content = fake()->text(2000);
            Post::query()->create([
                'catagory_id' => rand(1, 15),
                'name' => $name,
                'slug' => Str::slug($name) . '-' . Str::random(8),
                'img_thumbnail' => 'https://canifa.com/img/1000/1500/resize/8/t/8ts23s016-sk010-1.webp',

                'content' => $content,
                'published_date' => now(),
            ]);
        }
        for ($i = 1; $i < 15; $i++) {
            DB::table('post_tag')->insert([
                ['post_id' => $i,'tag_id'=> rand(1, 8)],
                ['post_id' => $i,'tag_id'=> rand(9, 15)]
            ]);
        }
        for ($i = 1; $i < 15; $i++) {
            DB::table('author_post')->insert([
                ['post_id' => $i,'author_id'=> rand(1, 3)]

            ]);
        }

    }
}
