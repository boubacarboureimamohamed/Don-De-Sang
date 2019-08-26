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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::resource('rdvs', 'RdvController');

Route::resource('users', 'UsersController');

Route::get('user/profile', 'UsersController@profile')->name('profile');

Route::resource('roles', 'RolesController');

Route::resource('permissions', 'PermissionsController');






Route::get('donneurs.add', 'DonneurController@adddonneur')->name('donneurs.add');

Route::post('donneurs', 'DonneurController@store')->name('donneurs.store');

Route::get('donneurs', 'DonneurController@index')->name('donneurs.index');

Route::delete('donneurs/{donneur}', 'DonneurController@destroy')->name('donneurs.destroy');

Route::get('donneurs/{donneur}/edit', 'DonneurController@edit')->name('donneurs.edit');

Route::PUT('donneurs/{donneur}', 'DonneurController@update')->name('donneurs.update');

Route::get('donneurs/{donneur}/show', 'DonneurController@show')->name('donneurs.show');

