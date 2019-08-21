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

Route::get('donneurs.add', 'DonneurController@adddonneur')->name('donneurs.add');

Route::post('donneurs', 'DonneurController@store')->name('donneurs.store');

Route::get('donneurs', 'DonneurController@index')->name('donneurs.index');

Route::DELETE('donneurs/{donneur}', 'DonneurController@destroy')->name('donneurs.destroy');

Route::get('donneurs/{donneur}/edit', 'DonneurController@edit')->name('donneurs.edit');

Route::PUT('donneurs/{donneur}', 'DonneurController@update')->name('donneurs.update');

Route::get('donneurs/{donneur}/show', 'DonneurController@show')->name('donneurs.show');

Route::get('dossier', 'DossierMedicalRController@index')->name('dossierM.index');

Route::get('dossier/{donneur}/examiner', 'DossierMedicalRController@examiner')->name('dossierM.examiner');

Route::post('dossier', 'DossierMedicalRController@store')->name('dossierM.store');

Route::get('dossier/donneur_apte', 'DossierMedicalRController@donneur_apte')->name('dossierM.donneur_apte');

Route::get('dossier/donneur_inapte', 'DossierMedicalRController@donneur_inapte')->name('dossierM.donneur_inapte');

Route::get('dossier/show_inapte', 'DossierMedicalRController@show_inapte')->name('dossierM.show_inapte');

Route::get('dossier/{donneur_apte}/show_apte', 'DossierMedicalRController@show_apte')->name('dossierM.show_apte');
