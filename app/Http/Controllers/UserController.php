<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function accountDetails()
    {
        $userId = Auth::user()->id;

        $transactions = Transaction::where(function ($query) use ($userId) {
            $query->where('depositor_id', $userId)
                ->orWhere('withdrawer_id', $userId);
        })
            ->distinct()
            ->get();
        return view('user.account_details', ['transactions' => $transactions]);
    }

    public function settings()
    {
        return view('user.settings');
    }

}
