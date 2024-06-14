<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function interBank(){
        return view('transactions.inter_bank_transaction');
    }

    public function otherBank(){
        return view('transactions.other_bank_transaction');
    }

    public function billPayment(){
        return view('transactions.bill_payment');
    }
    public function transferConfirm(){
        return view('transactions.transfer_confirm');
    }

    public function successTransfer(){
        return view('transactions.success_transfer');
    }

}
