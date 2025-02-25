<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\MemberStatus;
use App\Models\Patient;
use App\Models\Sex;
use App\Models\User;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

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
            'street_address' => fake()->word(),
            'city' => fake()->city(),
            'state' => fake()->word(),
            'zip_code' => fake()->word(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'insurance_type_id' => ::factory(),
            'is_member' => fake()->word(),
            'membership_type_id' => ::factory(),
            'membership_start_date' => fake()->date(),
            'membership_end_date' => fake()->date(),
            'membership_status_id' => fake()->randomNumber(),
            'sex_id' => Sex::factory(),
            'member_status_id' => MemberStatus::factory(),
        ];
    }
}
