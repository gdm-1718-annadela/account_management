@extends('layout')

@section('content')
    <h1>transactions</h1>
    @foreach($transactions as $transaction)
        @foreach($transaction->account as $account)
            {{$account->field_account_name}}
            {{$transaction->field_transaction_date}}
            {{$transaction->field_transaction_desc}}
            {{$transaction->field_transaction_increased}}
            {{$transaction->field_transaction_amount}}
            <a href="{{route('editTransaction', $transaction->id)}}">edit</a>
            <a href="">delete</a>
        @endforeach
    @endforeach
@endsection
