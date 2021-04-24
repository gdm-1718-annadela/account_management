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
            'category_id'=>request('name'),
            'title'=>request('description'),
            'title'=>request('amount'),
        ];

        $story= Story::create($data);
        $story_id = Story::where('id',$story->id)->first()->id;

        return redirect('/story/edit/'. $story_id);

        dd('test');
    }

    public function editAccount($id) {
        $account = Account::all()->where('id', $id)->first();
        return view('pages.edit-account')->with(compact('account'));
    }

    public function deleteAccount($id) {
        $account = Account::where('id', $id)->delete();
        return redirect()->back();
    }
}
