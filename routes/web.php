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

/** SITE */
Route::get('/', 'Site\WebController@home')->name('site.home');
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

/** ADMIN */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    /** Login */
    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');

    /** Rotas protegidas */
    Route::group(['middleware' => ['auth']], function () {
        /** Dashboard */
        Route::get('home', 'AuthController@home')->name('home');

        /** Academies */
        Route::resource('academies', 'AcademyController');
    });

    /** Logout */
    Route::get('logout', 'AuthController@logout')->name('logout');
});