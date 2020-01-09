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
    return view('index');
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

/*---
    ========= Login Admin
 ---*/

Route::get('/admin/', function () {
    return view('admin/login');
});

/*---
    ========= Home Admin
 ---*/

Route::get('/admin/home', function () {
    return view('admin/index');
})->name('home');

/*---
    ========= Users Admin
 ---*/

Route::get('/admin/users', function () {
    return view('admin/users');
})->name('users');

/*---
    ========= Category Admin
 ---*/

Route::get('/admin/category', function () {
    return view('admin/category');
})->name('category');


/*---
    ========= Cours Admin
 ---*/

Route::get('/admin/cours', function () {
    return view('admin/cours');
})->name('cours');

/*---
    ========= Book Admin
 ---*/

Route::get('/admin/books', function () {
    return view('admin/books');
})->name('books');

/*---
    ========= Script Admin
 ---*/

Route::get('/admin/scripts', function () {
    return view('admin/scripts');
})->name('scripts');

/*---
    ========= Profile Admin
 ---*/

Route::get('/admin/profile', function () {
    return view('admin/profile');
})->name('profile');

/*---
    ========= Logout Admin
 ---*/

Route::get('/admin/logout', function () {
    return view('admin/logout');
})->name('logout');


/*
|--------------------------------------------------------------------------
|  Routes Formateur
|--------------------------------------------------------------------------
*/
Route::get('/formateur', function () {
    return view('cours/login');
});

/*---
    ========= Book Formateur
 ---*/

Route::get('/formateur/books', function () {
    return view('formateur/books');
})->name('books');

/*---
    ========= Cours Formateur
 ---*/

Route::get('/formateur/cours', function () {
    return view('formateur/cours');
})->name('cours');

/*---
    ========= Home Formateur
 ---*/

Route::get('/formateur/home', function () {
    return view('formateur/index');
})->name('home');

/*---
    ========= Profile Formateur
 ---*/

Route::get('/formateur/profile', function () {
    return view('formateur/profile');
})->name('profile');

/*---
    ========= Scripts Formateur
 ---*/

Route::get('/formateur/scripts', function () {
    return view('formateur/scripts');
})->name('scripts');
