@extends('layout')

@section('content') 

<div class="accounts__container">
    @foreach($accounts as $account)
        <div class="accounts__account">
            <div class="accounts__profile-picture">
                <div class="accounts__profile-name">Z</div>
            </div>

            <div class="accounts__details">
                {{$account->field_account_name}}
                {{$account->field_account_desc}}
            </div>

            <div class="accounts__amount">
                {{$account->field_account_total_amount}}
            </div>

            <div class="accounts__date">
                {{$account->updated_at}}
            </div>

            <div class="accounts__actions">
                <a href="{{ route('viewAccount', $account->id) }}">view</a>
                <a href="{{ route('editAccount', $account->id) }}">edit</a>
                <a href="{{ route('deleteAccount', $account->id) }}">delete</a>
            </div>
        </div>
    @endforeach
</div>

@endsection
