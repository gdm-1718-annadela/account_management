<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getData() {
        $accounts = Account::all();
        return view('pages.accounts')->with(compact('accounts'));
    }

    public function getAccount($id) {
        $account = Account::all()->where('id', $id)->first();
        return view('pages.account')->with(compact('account'));
    }

    public function createAccount() {
        return view('pages.create-account');
    }

    public function saveAccount(Request $request) {
        \request()->validate( [
            'name'=> 'required',
            'description'=> 'required',
            'amount'=> 'required',
        ]);

        $data = [
            'field_account_name'=>request('name'),
            'field_account_desc'=>request('description'),
            'field_account_total_amount'=>request('amount'),
        ];

        $account = Account::create($data);
        $account_id = Account::where('id', $account->id)->first()->id;

        return redirect('/account/detail/'. $account_id);
    }

    public function editAccount($id) {
        $account = Account::all()->where('id', $id)->first();
        return view('pages.edit-account')->with(compact('account'));
    }

    public function updateAccount($id) {
        $account = Account::where('id', $id)->first();
        \request()->validate( [
            'name'=> 'required',
            'description'=> 'required',
            'amount'=> 'required',
        ]);

        $data = [
            'field_account_name'=>request('name'),
            'field_account_desc'=>request('description'),
            'field_account_total_amount'=>request('amount'),
        ];

        $account->update($data);
        return redirect('/account/detail/'.$id)->with('succes', 'updated');
    }

    public function deleteAccount($id) {
        $account = Account::where('id', $id)->delete();
        return redirect()->back();
    }
}
