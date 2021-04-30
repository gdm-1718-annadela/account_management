@extends('layout')

@section('content')
    <h1>Account</h1>
    {{$account->field_account_name}}
    {{$account->field_account_desc}}
    {{$account->field_account_total_amount}}
@endsection
