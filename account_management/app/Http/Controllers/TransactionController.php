<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use App\Models\Transfer;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function getData() {
        $transactions = Transaction::all();
        return view('pages.transactions')->with(compact('transactions'));
    }

    public function createTransaction() {
        $accounts = Account::all();
        return view('pages.create-transaction')->with(compact('accounts'));
    }

    public function saveTransaction(Request $request) {
        \request()->validate( [
            'date'=> 'required',
            'description'=> 'required',
            'amount'=> 'required',
        ]);

        foreach($request->accounts as $account){
            $data = [
                'field_transaction_date'=>request('date'),
                'field_transaction_desc'=>request('description'),
                'field_transaction_amount'=>request('amount'),
                'field_transaction_increased'=>request('increased') === 'on'? 1 : 0,
            ];
            $transaction = Transaction::create($data);

            $data = [
                'account_id'=> $account,
                'transaction_id'=> $transaction->id,
            ];
            $transfer = Transfer::create($data);
        }
        return redirect('/transactions');
    }

    public function editTransaction($id) {
        $accounts = Account::all();
        $selected_accounts = Transfer::select('account_id')->where('transaction_id', $id)->pluck('account_id');
        $transaction = Transaction::where('id', $id)->first();
        return view('pages.edit-transaction')->with(compact('accounts', 'selected_accounts', 'transaction'));
    }

    public function updateTransaction($id) {
        $transaction = Transaction::where('id', $id)->first();
        \request()->validate( [
            'date'=> 'required',
            'description'=> 'required',
            'amount'=> 'required',
        ]);

        $data = [
            'field_transaction_date'=>request('date'),
            'field_transaction_desc'=>request('description'),
            'field_transaction_amount'=>request('amount'),
            'field_transaction_increased'=>request('increased') === 'on'? 1 : 0,
        ];

        $transaction->update($data);
        return redirect('/transactions')->with('succes', 'updated');
    }

    public function deleteTransaction($id) {
        $transaction = Transaction::where('id', $id)->delete();
        return redirect()->back();
    }
}
