<?php

namespace App\Http\Controllers;

use App\Helpers\CoreHelper;
use App\Models\Transaction;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function interBank()
    {
        return view('transactions.inter_bank_transaction');
    }

    public function otherBank()
    {
        return view('transactions.other_bank_transaction');
    }

    public function billPayment()
    {
        return view('transactions.bill_payment');
    }
    public function transferConfirm()
    {
        return view('transactions.transfer_confirm');
    }

    public function successTransfer()
    {
        return view('transactions.success_transfer');
    }

    public function interBankTransaction(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'BenificiaryName' => 'required|string|max:255',
            'account_number' => 'required|max:6|min:6',
            'ammount' => 'required|min:3',
        ]);

        $benificiar = User::where('account_no', $request->account_number)->first();
        if ($benificiar) {

            if (CoreHelper::checkAccountBalance($request->ammount)) {
                $data = [
                    'BenificiaryName' => $benificiar->name,
                    'accountNo' => $benificiar->account_no,
                    'ammount' => $request->ammount,
                    'bank' => 'Same bank',
                    'purpose' => 'Money transer',
                    'category' => 1,
                ];

                return view('transactions.transfer_confirm', ['data' => $data]);
            } else {
                Toastr::error('Insufficient balance', 'Error');
                return redirect()->back();
            }
        }
        Toastr::error('Wrong Benificiary Account No', 'Error');
        return redirect()->back();

    }

    public function otherBankTransaction(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'BenificiaryName' => 'required|string|max:255',
            'accountNo' => 'required|max:6|min:6',
            'ammount' => 'required|min:3',
            'bank' => 'required',
            'purpose' => 'required',

        ]);


        if (CoreHelper::checkAccountBalance($request->ammount)) {
            $data = [
                'BenificiaryName' => $request->BenificiaryName,
                'accountNo' => $request->accountNo,
                'ammount' => $request->ammount,
                'bank' => $request->bank,
                'purpose' => $request->purpose,
                'category' => 2,
            ];

            return view('transactions.transfer_confirm', ['data' => $data]);
        } else {
            Toastr::error('Insufficient balance', 'Error');
            return redirect()->back();
        }

    }

    public function makeTransaction(Request $request)
    {
        $withdrawer = User::where('account_no', $request->BenificiaryAccountNumber)->first();
        $depositor = User::findOrFail(Auth::id());

        $depositor->update([
            'cash' => $depositor->cash - ($request->BillAmount + 30),
        ]);

        $transactionData = [
            'depositor_id' => Auth::id(),
            'description' => $request->purpose . ' ' . $request->BenificiaryName,
            'category' => 1,
            'amount' => $request->BillAmount + 30,
            'charges' => 30,
            'complete' => true,
        ];

        if ($withdrawer) {
            $transactionData['withdrawer_id'] = $withdrawer->id;
        }

        Transaction::create($transactionData);

        return view('transactions.success_transfer');
    }

}
