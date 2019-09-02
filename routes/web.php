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

Route::resource('rdvs', 'RdvController');

Route::get('planificationsfixe', 'RdvController@rdvfixeliste')->name('rdvs.rdv_fixe_liste');

Route::get('planificationsmobile', 'RdvController@rdvmobileliste')->name('rdvs.rdv_mobile_liste');

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

Route::get('dossier', 'DossierMedicalRSMController@index')->name('dossierM.index');

Route::get('dossier/{donneur}/examiner', 'DossierMedicalRSMController@examiner')->name('dossierM.examiner');

Route::post('dossier', 'DossierMedicalRSMController@store')->name('dossierM.store');

Route::get('dossier/donneur_apte', 'DossierMedicalRSMController@donneur_apte')->name('dossierM.donneur_apte');

Route::get('dossier/donneur_inapte', 'DossierMedicalRSMController@donneur_inapte')->name('dossierM.donneur_inapte');

Route::get('dossier/show_inapte', 'DossierMedicalRSMController@show_inapte')->name('dossierM.show_inapte');

Route::get('dossier/{donneur_apte}/show_apte', 'DossierMedicalRSMController@show_apte')->name('dossierM.show_apte');

Route::get('prelevement/donneur_apte_a_prelevee', 'DossierMedicalPrelevementController@donneur_apte_a_prelevee')->name('prelevement.donneur_apte_a_prelevee');

Route::get('prelevement/{donneur}/prelever', 'DossierMedicalPrelevementController@prelever')->name('prelevement.prelever');

Route::PUT('prelevement/{dossier}', 'DossierMedicalPrelevementController@store')->name('prelevement.store');

Route::get('prelevement/donneur_prelevee', 'DossierMedicalPrelevementController@donneur_prelevee')->name('prelevement.donneur_prelevee');

Route::get('prelevement/{prelevement}/show', 'DossierMedicalPrelevementController@show_prelevement')->name('prelevement.show_prelevement');

Route::get('prelevement/{prelevement}/edit', 'DossierMedicalPrelevementController@edit')->name('prelevement.edit');

Route::PUT('prelevement/{prelevement}', 'DossierMedicalPrelevementController@update')->name('prelevement.update');

Route::get('validation', 'DossierMedicalValidationController@donneur_a_valider')->name('validation.donneur_a_valider');

Route::get('validation/{validation}', 'DossierMedicalValidationController@validation')->name('validation.validation');

Route::PUT('validation/{dossier}', 'DossierMedicalValidationController@store')->name('validation.store');

Route::get('demande.create', 'DemandeController@create')->name('demande.create');

Route::post('demande.store', 'DemandeController@store')->name('demande.store');

