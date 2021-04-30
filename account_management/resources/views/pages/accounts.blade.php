@extends('layout')

@section('content')

<div class="accounts__container">
    @foreach($accounts as $account)
        <div class="accounts__account">
            <div class="accounts__profile-picture">
                <div class="accounts__profile-name">Z</div>
            </div>

            <div class="accounts__details">
                <h2 class="accounts__name">{{$account->field_account_name}}</h2>
                <p class="accounts__description">{{$account->field_account_desc}}</p>
            </div>

            <div class="accounts__amount">
                <h2 class="accounts__amount-number">€ <span>+</span>{{ number_format($account->field_account_total_amount, 2) }}</h2>
                <p class="accounts__amount-label">Total</p>
            </div>

            <div class="accounts__last-updated">
                <h2 class="accounts__date">{{ date('d/m/Y', strtotime($account->updated_at)) }} at {{ date('H:i', strtotime($account->updated_at)) }}</h2>

                <p class="accounts__date-label">Last updated</p>
            </div>

            <div class="accounts__actions">
                <a class="accounts__action accounts__action--view" href="{{ route('viewAccount', $account->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55%" viewBox="0 0 24 24">
                        <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                    </svg>
                </a>
                <a class="accounts__action accounts__action--edit" href="{{ route('editAccount', $account->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55%" viewBox="0 0 24 24">
                        <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/>
                    </svg>
                </a>
                <a class="accounts__action accounts__action--delete" href="{{ route('deleteAccount', $account->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55%" viewBox="0 0 24 24">
                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/>
                    </svg>
                </a>
            </div>
        </div>
    @endforeach
</div>

@endsection
