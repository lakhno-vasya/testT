<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserMobilePhoneBalance;
use App\Models\User;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'birthdate' => $this->faker->date('d-m-Y','now'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $numberOfPhones = rand(1, 3);
            \App\Models\UserMobilePhoneBalance::factory()
                ->count($numberOfPhones)
                ->state(['user_id' => $user->id])
                ->create();
        });
    }
}
