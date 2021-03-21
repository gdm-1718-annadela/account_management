<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Variable;

class VariableController extends Controller {

    public function getData() {
        $expense = Variable::all();
        $salaries = Salary::all();
        return view('pages.variables')->with(compact('salaries'));
    }

    public function update($salary_id) {
        $salary = Salary::where('id', $salary_id)->first();
        $data = [
            'field_salary_name' => request('name'),
            'field_salary_amount' => request('amount'),
        ];

        $salary->update($data);
        return redirect()->back()->with('succes', 'updated');
    }
}
