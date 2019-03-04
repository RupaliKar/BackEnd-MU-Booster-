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
    return view('home');
});
 Route::get('/cse', function () {
    return view('departments.cse');
}); 
/*  Route::get('/admin', function () {
    return view('admin.main');
});  */
Route::get('/admin', 'MainController@index');
 Route::get('/faculty', function () {
    return view('admin.faculty');
}); 
Auth::routes();

Route::get('/home', 'HomeController@index')-> name('home') ;
