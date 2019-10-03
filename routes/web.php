<?php

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

Route::get('/', function () {
    return view('page.index');
}) -> name('index.home');

// place
Route::get('/place', 'PlaceController@index') -> name('place.Index');
Route::get('/create', 'PlaceController@create') -> name('place.create');
Route::post('/place', 'PlaceController@store') -> name('place.store');

// employee
Route::get('/employee', 'EmployeeController@index') -> name('employee.index');
Route::get('/create/employee', 'EmployeeController@create') -> name('employee.create');
Route::post('/employee', 'EmployeeController@store') -> name('employee.store');
Route::get('/edit/employee/{id}', 'EmployeeController@edit') -> name('employee.edit');
Route::post('/update/employee/{id}', 'EmployeeController@update') -> name('employee.update');
Route::get('/update/employee/{id}', 'EmployeeController@destroy') -> name('employee.destroy');
