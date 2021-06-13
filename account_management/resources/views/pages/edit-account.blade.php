@extends('layout')

@section('content')
<h1>Edit Account {{$account->field_account_name}}</h1>
<form action="{{route('updateAccount', $account->id)}}" method="post">
    @csrf
    <label>Name of your account</label>
    <input type="text" name="name" value="{{$account->field_account_name}}">
    <label>Describe what this account is about</label>
    <textarea  name="description">{{$account->field_account_desc}}</textarea>
    <label>How much is currently on it?</label>
    <input type="text" name="amount" value="{{$account->field_account_total_amount}}">
    <button type="submit">Update account</button>
</form>
@endsection
