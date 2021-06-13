@extends('layout')

@section('content')
<h1>Add Account</h1>
{{--<form action="{{route('updateExpense', $expense->id)}}" method="post">--}}
<form action="{{route('saveAccount')}}" method="post">
    @csrf
    <label>Name of your account</label>
    <input type="text" name="name">
    <label>Describe what this account is about</label>
    <textarea  name="description"></textarea>
    <label>How much is currently on it?</label>
    <input type="text" name="amount">
    <button type="submit">Add account</button>
</form>
@endsection
