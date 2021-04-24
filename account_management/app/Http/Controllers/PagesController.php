<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function dashboard() {
        return view('pages.dashboard');
    }

    public function transaction() {
        return view('pages.transactions');
    }

    public function calendar() {
        return view('pages.calendar');
    }

    public function variables() {
        return view('pages.variables');
    }
}
