<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\Billing;
use App\Models\ICD9Code;
use App\Models\Patient;

class BillingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Billing::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'service_id' => ::factory(),
            'icd9_code_id' => fake()->word(),
            'price' => fake()->randomFloat(0, 0, 9999999999.),
            'medicare_flag' => fake()->boolean(),
            'hmo_flag' => fake()->boolean(),
            'amount_due' => fake()->randomFloat(0, 0, 9999999999.),
            'insurance_covered' => fake()->boolean(),
            'status_id' => fake()->word(),
            'i_c_d9_code_id' => ICD9Code::factory(),
        ];
    }
}
