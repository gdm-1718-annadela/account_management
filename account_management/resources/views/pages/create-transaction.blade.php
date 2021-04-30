@extends('layout')

@section('content')
    <h1>Create a transaction</h1>

    <form action="{{route('saveTransaction')}}" method="post">
        @csrf
        @foreach($accounts as $account)
            <input type="checkbox" id="{{$account->id}}" name="accounts[]" value="{{$account->id}}">
            <label for="{{$account->id}}">{{$account->field_account_name}}</label>
        @endforeach
        <label>Date</label>
        <input type="date" name="date">
        <label>Description</label>
        <textarea name="description"></textarea>
        <label>Amount</label>
        € <input type="number" name="amount">
        <input type="checkbox" name="increased">
        <button type="submit">Add transaction</button>
    </form>
@endsection
