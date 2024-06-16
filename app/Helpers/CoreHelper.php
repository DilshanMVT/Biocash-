<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CoreHelper
{
    public static function checkAccountBalance($ammount)
    {
        $user = User::findOrFail(Auth::user()->id);

        if ($user) {
            if ($user->cash > $ammount) {
                return true;
            } else {
                return false;
            }
        }
    }
}
