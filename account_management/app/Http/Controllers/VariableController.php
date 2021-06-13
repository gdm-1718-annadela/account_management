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

        // Calculate net pay.
        $gross = Salary::where('field_salary_system_name', 'system_salary_gross')->first();
        $rsz = Salary::where('field_salary_system_name', 'system_salary_rsz')->first();
        $bonus = Salary::where('field_salary_system_name', 'system_salary_bonus')->first();
        $withholding_tax = Salary::where('field_salary_system_name', 'system_salary_withholding_tax')->first();
        $reduction = Salary::where('field_salary_system_name', 'system_salary_reduction')->first();
        $srsz = Salary::where('field_salary_system_name', 'system_salary_srsz')->first();
        $contribution = Salary::where('field_salary_system_name', 'system_salary_contribution')->first();

        $gross_taxable_salary = $gross->field_salary_amount - ($rsz->field_salary_amount - $bonus->field_salary_amount);
        $net = $gross_taxable_salary - $withholding_tax->field_salary_amount + $reduction->field_salary_amount + $srsz->field_salary_amount - $contribution->field_salary_amount;

        $salary_net = Salary::where('field_salary_system_name', 'system_salary_net')->first();
        $data = [
            'field_salary_amount' => $net
        ];
        $salary_net->update($data);

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
