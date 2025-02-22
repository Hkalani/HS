<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Profile;
use App\Models\User;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->word(),
            'last_name' => fake()->lastName(),
            'sex' => fake()->word(),
            'dob' => fake()->date(),
            'user_id' => User::factory(),
            'address' => fake()->word(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
        ];
    }
}
