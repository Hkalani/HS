<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ExerciseChart;
use App\Models\Treatment;

class ExerciseChartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExerciseChart::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'chart_name' => fake()->word(),
            'treatment_id' => Treatment::factory(),
        ];
    }
}
