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
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
|  Routes Cours
|--------------------------------------------------------------------------
*/
Route::get('/cours', function () {
    return view('cours/login');
});


/*
|--------------------------------------------------------------------------
|  Routes Admin
|--------------------------------------------------------------------------
*/
Route::get('/admin', function () {
    return view('cours/login');
});


/*
|--------------------------------------------------------------------------
|  Routes Formateur
|--------------------------------------------------------------------------
*/
Route::get('/formateur', function () {
    return view('cours/login');
});
