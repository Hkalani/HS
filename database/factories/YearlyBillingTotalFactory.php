<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Patient;
use App\Models\YearlyBillingTotal;

class YearlyBillingTotalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = YearlyBillingTotal::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'year' => fake()->numberBetween(-10000, 10000),
            'amount_due' => fake()->randomFloat(0, 0, 9999999999.),
            'patient_id' => Patient::factory(),
        ];
    }
}
