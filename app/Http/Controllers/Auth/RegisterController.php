<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function storeUser(Request $request)
    {
       // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'nic' => 'required|max:13|min:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        // Generate a unique random number
        do {
            $randomNumber = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        } while (User::where('account_no', $randomNumber)->exists());

        User::create([
            'name' => $request->name,
            'nic' => $request->nic,
            'account_no' => $randomNumber,
            'avatar' => $request->image,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Toastr::success('Created new account successfully :)', 'Success');
         return redirect('login');
    }

}
