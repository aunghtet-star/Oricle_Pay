<?php

namespace App\Helpers;

use App\Wallet;

class UUIDGenerator
{
    public static function AccountNumber()
    {
        $number = mt_rand(1000000000000000, 9999999999999999);
        if (Wallet::where('account_numbers', $number)->exists()) {
            self::AccountNumber();
        }
        return $number;
    }
}
