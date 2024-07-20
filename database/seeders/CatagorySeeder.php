<?php

namespace Database\Seeders;

use App\Models\catagory;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       catagory::factory(15)->create();
    }
}
