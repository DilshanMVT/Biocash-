<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function accountDetails(){
        return view('user.account_details');
    }

    public function settings(){
        return view('user.settings');
    }

}
