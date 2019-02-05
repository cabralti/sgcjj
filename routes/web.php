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


Route::get('/admin', function(){
    return view('home');
});

Route::get('/admin/login', ['as' => 'admin.login', function(){
    return view('admin.login.login');
}]);

Route::get('/admin', ['as' => 'admin.principal', function(){
    return view('admin.principal.index');
}]);

//Route::get('/admin/professor', ['as' => 'admin.professor.index', function(){
////    return view('admin.professor.index');
////}]);

Route::resource('/admin/professor', 'ProfessorController');