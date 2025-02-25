<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ExerciseRecordChart;
use App\Models\Patient;

class ExerciseRecordChartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExerciseRecordChart::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'diagnosis' => fake()->word(),
            'date_of_injury' => fake()->date(),
            'exercise_name' => fake()->word(),
            'duration_minutes' => fake()->numberBetween(-10000, 10000),
            'intensity_id' => fake()->word(),
            'icd9_code_id' => fake()->word(),
            'notes' => fake()->text(),
            'patient_id' => Patient::factory(),
        ];
    }
}
