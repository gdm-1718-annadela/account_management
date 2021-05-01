<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function dashboard() {
        $salary = Salary::all();
        $gross = Salary::where('field_salary_system_name', 'system_salary_gross')->first();
        $gross = explode(',', number_format($gross->field_salary_amount, 2, ',', '.'));

        return view('pages.dashboard')->with(compact('gross'));
    }

    public function calendar() {
        return view('pages.calendar');
    }

    public function variables() {
        return view('pages.variables');
    }
}
