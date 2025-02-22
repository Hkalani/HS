<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AuthorizationForm;
use App\Models\Member;

class AuthorizationFormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AuthorizationForm::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'notes' => fake()->text(),
            'member_id' => Member::factory(),
        ];
    }
}
