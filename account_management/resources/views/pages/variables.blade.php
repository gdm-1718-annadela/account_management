@extends('layout')

@section('content')
    <h1>Salary</h1>
    @foreach($salaries as $salary)
        <form action="{{route('updateSalary', $salary->id)}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" id="{{$salary->id}}" value="{{$salary->field_salary_name}}">
                <input type="text" name="amount" id="{{$salary->id}}" value="{{$salary->field_salary_amount}}">
            </div>
            <button type="submit">Submit</button>
        </form>
    @endforeach

    @foreach($expenses as $key => $expenseByCategory)
        <form action="{{route('updateCategory', $key)}}" method="post">
            @csrf
            <input name="name" type="text" value="{{$key}}">
            <button type="submit">Submit</button>
            <a href=" {{ route('deleteCategory', $key) }}">Delete</a>
        </form>
        <div>
            @foreach($expenseByCategory as $expense)
                <form action="{{route('updateExpense', $expense->id)}}" method="post">
                    @csrf
                    <input type="text" name="name" id="{{$expense->id}}" value="{{$expense->field_expense_name}}">
                    <input type="checkbox" name="increased" id="{{$expense->id}}" {{$expense->field_expense_increased ? "checked" : ""}}>
                    <input type="text" name="amount" id="{{$expense->id}}" value="{{$expense->field_expense_amount}}">
                    <select name="period">
                        @foreach($periods as $period)
                            <option {{$expense->period_id === $period->id ? "selected" : ""}} value="{{$period->id}}">{{$period->field_period_name}}</option>
                        @endforeach
                    </select>
                    <button type="submit">Submit</button>
                    <a href=" {{ route('deleteExpense', $expense->id) }}">Delete</a>
                </form>
            @endforeach
        </div>
    @endforeach


@endsection
