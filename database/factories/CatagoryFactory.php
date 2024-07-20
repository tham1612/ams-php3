<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CatagoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'catagory' => $this->faker->text(15),  // Sửa lỗi chính tả từ 'catagory' thành 'category'
            'category_id' => rand(1, 15),
        ];
    }
}
