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
Route::get('/accounts', 'PagesController@accounts');
Route::get('/transactions', 'PagesController@transaction');
Route::get('/calendar', 'PagesController@calendar');
Route::get('/variables', 'VariableController@getData');
Route::post('/variables/update/{salary_id}', 'VariableController@update')->name('updateSalary');
Route::get('/variables/delete/{salary_id}', 'VariableController@delete')->name('deleteSalary');
