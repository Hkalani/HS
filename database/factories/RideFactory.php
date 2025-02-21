<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Booking;
use App\Models\Member;
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
            'columns' => Booking::factory()->create()->columns,
            'booking_id' => Booking::factory(),
            'member_id' => Member::factory(),
            'user_id' => User::factory(),
        ];
    }
}
