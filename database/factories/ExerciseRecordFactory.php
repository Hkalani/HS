<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ExerciseRecord;
use App\Models\Treatment;

class ExerciseRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExerciseRecord::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'exercise_name' => fake()->word(),
            'duration_minutes' => fake()->numberBetween(-10000, 10000),
            'intensity' => fake()->randomElement(/** enum_attributes **/),
            'treatment_id' => Treatment::factory(),
        ];
    }
}
