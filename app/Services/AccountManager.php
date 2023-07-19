<?php

namespace App\Services;

use App\Repositories\UserMobilePhoneBalanceRepository;
class AccountManager
{
    private $userMobilePhoneBalanceRepository;
    public function __construct(UserMobilePhoneBalanceRepository $userMobilePhoneBalanceRepository)
    {
        $this->userMobilePhoneBalanceRepository = $userMobilePhoneBalanceRepository;
    }

    public function phoneRecharge($phoneNumber, $amount)
    {
        $phoneNumberFind = $this->userMobilePhoneBalanceRepository->findOrFailByPhoneNumber($phoneNumber);

        if($amount < 100){
            $phoneNumberFind->balance + $amount;
            $phoneNumberFind->update(['balance' => $phoneNumberFind]);
        }
    }
}
