<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Member;
use App\Models\PatientBilling;

class PatientBillingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientBilling::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'billing_address' => fake()->word(),
            'amount_due' => fake()->randomFloat(0, 0, 9999999999.),
            'member_id' => Member::factory(),
        ];
    }
}
