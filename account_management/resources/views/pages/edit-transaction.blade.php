@extends('layout')

@section('content')
    <h1>Create a transaction</h1>

    <form action="{{route('updateTransaction', $transaction->id)}}" method="post">
        @csrf
        <label>Date</label>
        <input type="date" name="date" value="{{$transaction->field_transaction_date}}">
        <label>Description</label>
        <textarea name="description">{{$transaction->field_transaction_desc}}</textarea>
        <label>Amount</label>
        € <input type="number" name="amount" value="{{$transaction->field_transaction_amount}}">
        @if($transaction->field_transaction_increased === 1)
            <input type="checkbox" name="increased" checked>
        @else
            <input type="checkbox" name="increased">
        @endif
        <button type="submit">Add transaction</button>
    </form>
@endsection
