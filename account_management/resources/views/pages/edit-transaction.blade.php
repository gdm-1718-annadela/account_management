@extends('layout')

@section('content')
    <h1>Create a transaction</h1>

    <form action="{{route('saveTransaction')}}" method="post">
        @csrf
        @foreach($accounts as $account)
            @if($selected_accounts->contains($account->id))
                <input type="checkbox" id="{{$account->id}}" name="accounts[]" checked>
            @else
                <input type="checkbox" id="{{$account->id}}" name="accounts[]">
            @endif
            <label for="{{$account->id}}">{{$account->field_account_name}}</label>
        @endforeach
        <label>Date</label>
        <input type="date" name="date" value="{{$transaction->field_transaction_date}}">
        <label>Description</label>
        <textarea name="description">{{$transaction->field_transaction_desc}}</textarea>
        <label>Amount</label>
        € <input type="number" name="amount" value="{{$transaction->field_transaction_amount}}">
        <input type="checkbox" name="increased">
        <button type="submit">Add transaction</button>
    </form>
@endsection
