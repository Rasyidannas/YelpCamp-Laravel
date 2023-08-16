<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Camp>
 */
class CampFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function suspended(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'New Camp',
                'price' => '200',
                'images' => 'https://i.ibb.co/VWJgcYr/download-17.jpg',
                'description' => 'Dive into a world of water-based adventures at Camp Aquatic Bliss! Located near a beautiful lake, this camp is perfect for kids aged 9-13 who love the water. Campers will enjoy swimming, kayaking, fishing, and even learn water safety techniques. The camp also features exciting water games and friendly competitions that promote sportsmanship and aquatic skills'
            ];
        });
    }
}
