<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicle_number' => fake()->text(50),
            'company_name' => fake()->text(50),
            'driver_name' => fake()->text(50),
            'convincer_name' => fake()->text(50),
            'guide_name' => fake()->text(50),

        ];
    }
}
