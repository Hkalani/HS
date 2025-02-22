<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Member;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'profile_id' => fake()->word(),
            'user_id' => fake()->randomNumber(),
            'membership_type_id' => fake()->word(),
            'insurance_type' => fake()->word(),
            'membership_start_date' => fake()->date(),
            'membership_end_date' => fake()->date(),
            'notes' => fake()->text(),
            'street' => fake()->streetName(),
            'city' => fake()->city(),
            'state' => fake()->word(),
            'zip_code' => fake()->word(),
            'phone' => fake()->phoneNumber(),
            'emr_name' => fake()->word(),
            'emr_relationship' => fake()->word(),
            'emr_phone' => fake()->word(),
            'emergency_contact_name' => fake()->word(),
            'emergency_contact_relationship' => fake()->word(),
            'emergency_contact_phone' => fake()->word(),
            'profile_picture' => fake()->word(),
            'membership_status' => fake()->randomElement(/** enum_attributes **/),
        ];
    }
}
