<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ICD9Code;

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
            'relations' => fake()->word(),
        ];
    }
}
