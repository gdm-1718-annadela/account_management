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
Route::get('/calendar', 'PagesController@calendar');
Route::get('/variables', 'VariableController@getData');
Route::post('/variables/salary/update/{salary_id}', 'VariableController@updateSalary')->name('updateSalary');
Route::post('/variables/expense/update/{expense_id}', 'VariableController@updateExpense')->name('updateExpense');
Route::get('/variables/expense/delete/{expense_id}', 'VariableController@deleteExpense')->name('deleteExpense');
Route::post('/variables/category/update/{key}', 'CategoryController@update')->name('updateCategory');
Route::get('/variables/category/delete/{key}', 'CategoryController@delete')->name('deleteCategory');

// accounts
Route::get('/accounts', 'AccountController@getData')->name('viewAccounts');
Route::get('/account/detail/{id}', 'AccountController@getAccount')->name('viewAccount');
Route::get('/account/create', 'AccountController@createAccount')->name('createAccount');
Route::post('/account/save', 'AccountController@saveAccount')->name('saveAccount');
Route::get('/account/add', 'AccountController@addAccount')->name('addAccount');
Route::get('/account/edit/{id}', 'AccountController@editAccount')->name('editAccount');
Route::post('/account/update/{id}', 'AccountController@updateAccount')->name('updateAccount');
Route::get('/account/delete/{id}', 'AccountController@deleteAccount')->name('deleteAccount');

// transactions
Route::get('/transactions', 'TransactionController@getData');
Route::get('/transaction/create', 'TransactionController@createTransaction')->name('createTransaction');
Route::post('/transaction/save', 'TransactionController@saveTransaction')->name('saveTransaction');
Route::get('/transaction/edit/{id}', 'TransactionController@editTransaction')->name('editTransaction');
Route::post('/transaction/update/{id}', 'TransactionController@updateTransaction')->name('updateTransaction');
Route::get('/transaction/delete/{id}', 'TransactionController@deleteTransaction')->name('deleteTransaction');
