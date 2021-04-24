<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function getData() {
        $transactions = Transaction::all();
        $accounts = Account::all();
        return view('pages.transactions')->with(compact('transactions', 'accounts'));
    }
}
