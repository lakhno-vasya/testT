<?php

namespace App\Repositories;

use App\Models\UserMobilePhoneBalance;

class UserMobilePhoneBalanceRepository
{
    public function findOrFailByPhoneNumber(String $PhoneNumber)
    {
        return UserMobilePhoneBalance::findOrFail($PhoneNumber);
    }
}
