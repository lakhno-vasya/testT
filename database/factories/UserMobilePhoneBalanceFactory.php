<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserMobilePhoneBalance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

class UserMobilePhoneBalanceFactory extends Factory
{
    protected $model = \App\Models\UserMobilePhoneBalance::class;

    public function definition(): array
    {
        $operatorCodes = ['50', '67', '63', '68'];
        $operator = $operatorCodes[array_rand($operatorCodes)];

        return [
            'mobile_phone_number' => "+380{$operator}" . $this->faker->numberBetween(1000000, 9999999),
            'balance' => $this->faker->randomFloat(2, -50, 150),
            'user_id' => $this->configure(),
        ];
    }
    public function configure()
    {
        return $this->state(function (array $attributes) {

            return [
                'user_id' => $attributes['user_id'] ?? null,
            ];
        });
    }
}
