<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ExersiseRecord;
use App\Models\Treatment;

class ExersiseRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExersiseRecord::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'treatment_id' => Treatment::factory(),
        ];
    }
}
