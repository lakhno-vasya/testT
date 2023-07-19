<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Query\Builder;

class UserRepository
{
    public function getById($userId)
    {
        return User::select('user_id', 'name', 'birthdate')
            ->with('userMobilePhoneBalance:mobile_phone_number')
            ->whereUserId($userId)
            ->get();
    }

    public function create(array $userData)
    {
        return User::create($userData);
    }

    public function addMobilePhone($userId, array $phoneData)
    {
        $user = User::findOrFail($userId);
        $user->userMobilePhones()->create($phoneData);
    }

    public function delete($userId)
    {
        User::destroy($userId);
    }
}
