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

Route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('/a-liga/sobre', ['as' => 'site.a-liga.sobre', 'uses' => 'Site\HomeController@about']);
Route::get('/a-liga/informacoes', ['as' => 'site.a-liga.informacoes', 'uses' => 'Site\HomeController@information']);
Route::get('/eventos', ['as' => 'site.eventos', 'uses' => 'Site\HomeController@events']);
Route::get('/eventos/{id}', ['as' => 'site.eventos.detalhes', 'uses' => 'Site\HomeController@eventsDetails']);
Route::get('/noticias', ['as' => 'site.noticias', 'uses' => 'Site\HomeController@news']);
Route::get('/contato', ['as' => 'site.contato', 'uses' => 'Site\HomeController@contact']);



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

Route::get('/admin/professor/destroy/{id}', ['as' => 'professor.destroy', 'uses' => 'ProfessorController@destroy']);