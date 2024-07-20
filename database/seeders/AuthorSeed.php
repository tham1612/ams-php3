<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Lan', 'Phong', 'Linh', 'Lan', 'Sang'] as $item) {
            Author::query()->create(['name' => $item,
                'tuoi'=>rand(1,100)],
            );
        }
    }
}
