<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advertise>
 */
class AdvertiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(10, 100),
            'is_negotiable' => $this->faker->boolean(),
            'description' => $this->faker->paragraph(3),
            'user_id' => User::pluck('id')->random(),
            'category_id' => Category::pluck('id')->random(),
            'state_id' => State::pluck('id')->random(),

        ];
    }
}
