@extends('layout')

@section('content')
    <h1>Salary</h1>
    @foreach($salaries as $salary)
        <form action="{{route('updateSalary', $salary->id)}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" id="{{$salary->id}}" value="{{$salary->field_salary_name}}" disabled>
                <input type="text" name="amount" id="{{$salary->id}}" value="{{$salary->field_salary_amount}}" disabled>
            </div>
            <button type="submit">Submit</button>
        </form>
    @endforeach

    
@endsection
