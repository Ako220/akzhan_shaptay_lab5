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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{age}', function () {
    return view('welcome2');
});

Route::get('/post/{id?}/{age?}', function ($id=null, $age=15) {
    return "Your ID is: ".$id."<br>"."Your age is: ".$age;
});

Route::get('/route_example', function () {
    return "Web programming: back-end";
});

Route::get('/lab4',"LabController@index");
Route::resource('/labka4',"LabController");

Route::get('/contact', function() {
    return view("/contact")->with("name", "Akzhan")->with("age", "22");
});

Route::get('/contact/{number1}/{sign}/{number2}', 'CalculateController@operation');

Route::get('/myname', function(){
    return view('name');
});
 
Route::get('/name', 'StudentController@get_name');
Route::get('/date', 'StudentController@get_date_of_birth');
Route::get('/age', 'StudentController@get_age');