<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::class,
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['450, 000', '700,000', '900, 000']),
            'location' => 'On premises',
            'schedule' => 'Full Time',
            'url' => fake()->url(),
            'featured' => 'false',

        ];
    }
}
