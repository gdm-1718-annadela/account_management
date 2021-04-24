@extends('layout')

@section('content')
    <h1>Accounts</h1>
    @foreach($accounts as $account)
        <div>
            {{$account->field_account_name}}
            {{$account->field_account_desc}}
            {{$account->field_account_total_amount}}
            {{$account->updated_at}}
            <a href="{{ route('viewAccount', $account->id) }}">view</a>
            <a href="{{ route('editAccount', $account->id) }}">edit</a>
            <a href="{{ route('deleteAccount', $account->id) }}">delete</a>
        </div>
    @endforeach
@endsection
