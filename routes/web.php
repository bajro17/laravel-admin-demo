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
use \App\Practice;
use \App\Resources\Practices;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]); 

Route::group(['middleware' => ['can:admin']], function () {
    Route::get('/admin', function() {
        return view("admin.admin");
    });
    Route::resource('/employee', 'EmployeeController');
    Route::resource('/field', 'FieldController');
    Route::resource('/practice', 'PracticeController');   
});


Route::get('/api/practice', 'ApiController@api');