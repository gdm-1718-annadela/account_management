@extends('layout')

@section('content')
    <div class="content variables">
        <div class="variables__wrapper">
            <div class="variables__salary">
                <h2 class="variables__category-name">
                    Salary
                    <span class="variables__category-lock">
                        <span class="variables__category-lock--open" hidden>
                            <svg width="1em" height="1em" viewBox="0 0 67 88" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M58.333,29.167l-4.166,-0l-0,-8.334c-0,-11.5 -9.334,-20.833 -20.834,-20.833c-11.5,0 -20.833,9.333 -20.833,20.833l8.333,0c0,-6.916 5.584,-12.5 12.5,-12.5c6.917,0 12.5,5.584 12.5,12.5l0,8.334l-37.5,-0c-4.583,-0 -8.333,3.75 -8.333,8.333l0,41.667c0,4.583 3.75,8.333 8.333,8.333l50,0c4.584,0 8.334,-3.75 8.334,-8.333l-0,-41.667c-0,-4.583 -3.75,-8.333 -8.334,-8.333Zm0,50l-50,-0l0,-41.667l50,0l0,41.667Zm-25,-12.5c4.584,-0 8.334,-3.75 8.334,-8.334c-0,-4.583 -3.75,-8.333 -8.334,-8.333c-4.583,0 -8.333,3.75 -8.333,8.333c0,4.584 3.75,8.334 8.333,8.334Z" />
                            </svg>
                        </span>
                        <span class="variables__category-lock--closed">
                            <svg width="1em" height="1em" viewBox="0 0 67 88" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M58.333,29.167l-4.166,-0l-0,-8.334c-0,-11.5 -9.334,-20.833 -20.834,-20.833c-11.5,0 -20.833,9.333 -20.833,20.833l0,8.334l-4.167,-0c-4.583,-0 -8.333,3.75 -8.333,8.333l0,41.667c0,4.583 3.75,8.333 8.333,8.333l50,0c4.584,0 8.334,-3.75 8.334,-8.333l-0,-41.667c-0,-4.583 -3.75,-8.333 -8.334,-8.333Zm-37.5,-8.334c0,-6.916 5.584,-12.5 12.5,-12.5c6.917,0 12.5,5.584 12.5,12.5l0,8.334l-25,-0l0,-8.334Zm37.5,58.334l-50,-0l0,-41.667l50,0l0,41.667Zm-25,-12.5c4.584,-0 8.334,-3.75 8.334,-8.334c-0,-4.583 -3.75,-8.333 -8.334,-8.333c-4.583,0 -8.333,3.75 -8.333,8.333c0,4.584 3.75,8.334 8.333,8.334Z"/>
                            </svg>
                        </span>
                    </span>
                </h2>

                <div class="variables__list">
                    @foreach($salaries as $salary)
                        <form action="{{route('updateSalary', $salary->id)}}" method="post" class="variables__expense-form">
                            @csrf
                            <textarea rows='1' data-min-rows='1' name="name" id="{{$salary->id}}" class="js-variable-input autoExpand variables__expense-name">{{$salary->field_salary_name}}</textarea>

                            <div class="variables__expense-amount">
                                <div class="variables__expense-value-wrapper">
                                    <input class="variables__expense-value" type="number" name="amount" id="{{$salary->id}}" value="{{$salary->field_salary_amount}}">
                                </div>
                                <span class="variables__expense-suffix">
                                    euro
                                </span>
                            </div>
                            <button type="submit" hidden>Submit</button>
                        </form>
                    @endforeach
                </div>
            </div>

            @foreach($expenses as $key => $expenseByCategory)
                <div class="variables__category">
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
                </div>
            @endforeach
        </div>
    </div>
@endsection
