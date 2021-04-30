@extends('layout')

@section('content')

<div class="dashboard__container">
    @include('component.dashboard.featured-account')
    @include('component.dashboard.netto-bruto')
    @include('component.dashboard.holiday')
</div>

@endsection
