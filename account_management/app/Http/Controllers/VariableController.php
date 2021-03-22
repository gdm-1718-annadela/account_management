<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Period;
use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Expense;

class VariableController extends Controller {

    public function getData() {
        $expenses = [];
        $categories = Category::all();
        $salaries = Salary::all();
        $periods = Period::all();

        // Get all expenses sorted on category.
        foreach ($categories as $category) {
            $expensesByCategory = Expense::all()->where("category_id", $category->id);
            $expenses[$category->field_category_name] = $expensesByCategory;
        }
        return view('pages.variables')->with(compact('salaries' , 'expenses', 'categories', 'periods'));
    }

    public function updateSalary($salary_id) {
        $salary = Salary::where('id', $salary_id)->first();
        $data = [
            'field_salary_name' => request('name'),
            'field_salary_amount' => request('amount'),
        ];

        $salary->update($data);
        return redirect()->back()->with('succes', 'updated');
    }

    public function updateExpense($expense_id) {
        $expense = Expense::where('id', $expense_id)->first();

        $data = [
            'field_expense_name' => request('name'),
            'field_expense_amount' => request('amount'),
            'field_expense_increased' => (request('increased')) ? true : false,
            'period_id' => request('period'),
        ];

        $expense->update($data);
        return redirect()->back()->with('succes', 'updated');
    }

    public function deleteExpense($expense_id){
        $expense = Expense::where('id',$expense_id)->delete();
        return redirect()->back();
    }
}
