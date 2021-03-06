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
Route::get('/sidebar', function () {
    return view('layouts.sidebar');
});
Route::get('/header', function () {
    return view('layouts.header');
});
Route::get('/footer', function () {
    return view('layouts.footer');
});
Route::get('/content', function () {
    return view('layouts.content');
});
Route::get('/form', function () {
    return view('layouts.absent.create');
});
Route::get('/admin', function() {
    return view('layouts.admin');
});
Route::get('/users', function() {
    return view('admin.user');
});
Route::resource('admin/user', 'UserController');

