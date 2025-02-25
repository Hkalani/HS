<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\Booking;
use App\Models\Ride;
use App\Models\User;

class RideFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ride::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),
            'patient_id' => ::factory(),
            'pickup_location' => fake()->word(),
            'dropoff_location' => fake()->word(),
            'pickup_time' => fake()->dateTime(),
            'return_ride' => fake()->boolean(),
            'return_pickup_time' => fake()->dateTime(),
            'driver_id' => fake()->word(),
            'status_id' => fake()->word(),
            'ride_notes' => fake()->text(),
            'user_id' => User::factory(),
        ];
    }
}
