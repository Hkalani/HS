<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ICD9Code;
use App\Models\Service;

class ICD9CodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ICD9Code::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'code' => fake()->word(),
            'service_id' => Service::factory(),
            'price' => fake()->randomFloat(0, 0, 9999999999.),
        ];
    }
}
