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

Route::get('/', 'Site\WebController@index')->name('site.home');
Route::get('/a-liga/sobre', 'Site\WebController@about')->name('site.a-liga.sobre');
Route::get('/a-liga/informacoes', 'Site\WebController@information')->name('site.a-liga.informacoes');

Route::get('/atletas/como-registrar-atleta', 'Site\WebController@howRegisterAthlete')->name('site.atletas.como-registrar-atleta');
Route::get('/atletas/registrar-atleta', 'Site\WebController@registerAthlete')->name('site.atletas.registrar-atleta');

Route::get('/academias/como-registrar-academia', 'Site\WebController@howRegisterAcademy')->name('site.academias.como-registrar-academia');
Route::get('/academias/registrar-academia', 'Site\WebController@registerAcademy')->name('site.academias.registrar-academia');

Route::get('/eventos', 'Site\WebController@events')->name('site.eventos');
Route::get('/eventos/{uri}', 'Site\WebController@eventsDetails')->name('site.eventos.detalhes');
Route::get('/noticias', 'Site\WebController@news')->name('site.noticias');
Route::get('/contato', 'Site\WebController@contact')->name('site.contato');


Route::get('/admin', function () {
    return view('home');
});

Route::get('/admin/login', ['as' => 'admin.login', function () {
    return view('admin.login.login');
}]);

Route::get('/admin', ['as' => 'admin.principal', function () {
    return view('admin.principal.index');
}]);

//Route::get('/admin/professor', ['as' => 'admin.professor.index', function(){
////    return view('admin.professor.index');
////}]);

Route::resource('/admin/professor', 'ProfessorController');

Route::get('/admin/professor/destroy/{id}', ['as' => 'professor.destroy', 'uses' => 'ProfessorController@destroy']);