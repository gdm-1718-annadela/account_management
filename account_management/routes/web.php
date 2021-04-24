<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@dashboard');
Route::get('/accounts', 'AccountController@getData');
Route::get('/transactions', 'PagesController@transaction');
Route::get('/calendar', 'PagesController@calendar');
Route::get('/variables', 'VariableController@getData');
Route::post('/variables/salary/update/{salary_id}', 'VariableController@updateSalary')->name('updateSalary');
Route::post('/variables/expense/update/{expense_id}', 'VariableController@updateExpense')->name('updateExpense');
Route::get('/variables/expense/delete/{expense_id}', 'VariableController@deleteExpense')->name('deleteExpense');
Route::post('/variables/category/update/{key}', 'CategoryController@update')->name('updateCategory');
Route::get('/variables/category/delete/{key}', 'CategoryController@delete')->name('deleteCategory');
