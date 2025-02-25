<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\Appointment;
use App\Models\Booking;
use App\Models\User;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),
            'patient_id' => ::factory(),
            'staff_id' => fake()->randomNumber(),
            'appointment_type_id' => fake()->word(),
            'appointment_date_time' => fake()->dateTime(),
            'status_id' => fake()->word(),
            'duration_minutes' => fake()->numberBetween(-10000, 10000),
            'location' => fake()->word(),
            'notes' => fake()->text(),
            'user_id' => User::factory(),
        ];
    }
}
