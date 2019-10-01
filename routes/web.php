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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'verifier']], function() {

        Route::get('/home', 'HomeController@index')->name('home');

        Route::resource('rdvs', 'RdvController');

        Route::get('planificationsfixe', 'RdvController@rdvfixeliste')->name('rdvs.rdv_fixe_liste');

        Route::get('planificationsmobile', 'RdvController@rdvmobileliste')->name('rdvs.rdv_mobile_liste');

        Route::resource('users', 'UsersController');

        Route::get('user/profile', 'UsersController@profile')->name('profile');

        Route::put('user/{user}/edit', 'UsersController@updateperso')->name('users.updateperso');

        Route::resource('roles', 'RolesController');

        Route::resource('permissions', 'PermissionsController');

        Route::resource('seuilsms', 'SeuilSmsController');

        /*
        Route::resource('ligne', 'LignedemandeController'); */

        Route::get('donneurs.add', 'DonneurController@adddonneur')->name('donneurs.add');

        Route::post('donneurs', 'DonneurController@store')->name('donneurs.store');

        Route::post('donneurs/situation', 'DonneurController@storesituation')->name('donneurs.storesituation');

        Route::post('donneurs/{situation}/situation', 'DonneurController@updatesituation')->name('donneurs.updatesituation');

        Route::post('donneurs/typedonneur', 'DonneurController@storetypedonneur')->name('donneurs.storetypedonneur');

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

        Route::get('dossier/{donneur}/show_dossiermedical', 'DossierMedicalRSMController@show_dossiermedical')->name('dossierM.show_dossiermedical');

        Route::get('dossiermedical', 'DossierMedicalRSMController@dossiermedical')->name('dossierM.dossiermedical');

        Route::get('dossier/{donneur_apte}/show_apte', 'DossierMedicalRSMController@show_apte')->name('dossierM.show_apte');

        Route::get('donneursexaminer', 'DossierMedicalRSMController@donneurs_examiner')->name('dossierM.donneursexaminer');

        Route::get('donneurexaminers/{donneurexaminer}/modifier', 'DossierMedicalRSMController@edit_donneursexaminer')->name('dossierM.editdonneursexaminer');

        Route::PUT('donneursexaminer/{donneurexaminer}', 'DossierMedicalRSMController@update_donneursexaminer')->name('dossierM.updatedonneursexaminer');

        Route::get('detailsdonneurexaminer/{donneursexaminer}', 'DossierMedicalRSMController@show_donneursexaminer')->name('dossierM.showdonneursexaminer');

        Route::delete('examination/{donneursexaminer}', 'DossierMedicalRSMController@destroy_donneurexaminer')->name('dossierM.destroydonneurexaminer');

        Route::get('prelevement/donneur_apte_a_prelevee', 'DossierMedicalPrelevementController@donneur_apte_a_prelevee')->name('prelevement.donneur_apte_a_prelevee');

        Route::get('prelevement/{donneur}/prelever', 'DossierMedicalPrelevementController@prelever')->name('prelevement.prelever');

        Route::PUT('prelevement/{dossier}', 'DossierMedicalPrelevementController@store')->name('prelevement.store');

        Route::get('prelevement/donneur_prelevee', 'DossierMedicalPrelevementController@donneur_prelevee')->name('prelevement.donneur_prelevee');

        Route::get('prelevement/{prelevement}/show', 'DossierMedicalPrelevementController@show_prelevement')->name('prelevement.show_prelevement');

        Route::get('prelevement/{prelevement}/edit', 'DossierMedicalPrelevementController@edit')->name('prelevement.edit');

        Route::PUT('prelevement/{prelevement}', 'DossierMedicalPrelevementController@update')->name('prelevement.update');

        Route::get('validation', 'DossierMedicalValidationController@donneur_a_valider')->name('validation.donneur_a_valider');

        Route::get('donsaccepter', 'DossierMedicalValidationController@don_accepter')->name('validation.donaccepter');

        Route::get('donsrejete', 'DossierMedicalValidationController@don_rejete')->name('validation.donrejete');

        Route::get('showdonaccepter/{don}', 'DossierMedicalValidationController@show_donaccepter')->name('validation.showdonaccepter');

        Route::get('showdonrefuse/{don}', 'DossierMedicalValidationController@show_donrefuse')->name('validation.showdonrefuse');

        Route::get('listegroupage', 'DossierMedicalValidationController@index_groupage')->name('validation.indexgroupage');

       
       Route::PUT('update/{groupement}', 'DossierMedicalValidationController@update_seuil')->name('validation.updateseuil');

        Route::get('validation/donneur_valider', 'DossierMedicalValidationController@donneur_valider')->name('validation.donneur_valider');

        Route::get('validation/{dossier}', 'DossierMedicalValidationController@validation')->name('validation.validation');

        Route::PUT('validation/{dossier}', 'DossierMedicalValidationController@store')->name('validation.store');

        Route::get('demande.create', 'DemandeController@create')->name('demande.create');

        Route::post('demande.store', 'DemandeController@store')->name('demande.store');





        Route::get('demande', 'DemandeController@index')->name('demande.index');

        Route::get('demande/{demande}/show', 'DemandeController@show')->name('demande.show');

        Route::get('demande/{demande}/edit', 'DemandeController@edit')->name('demande.edit');

        Route::PUT('demande/{demande}', 'DemandeController@demandeupdate')->name('demande.demandeupdate');

        Route::post('ligne/lignestore', 'DemandeController@lignestore')->name('ligne.lignestore');

        Route::delete('demande/{demande}', 'DemandeController@demande destroy')->name('demande.demandedestroy');

        Route::delete('ligne/{ligne}', 'DemandeController@lignedestroy')->name('ligne.lignedestroy');

        Route::get('stock', 'DossierMedicalValidationController@stock')->name('validation.stock');

        Route::post('livraison/{ligne}', 'DemandeController@livraison')->name('demande.livraison');

        Route::get('codebar', 'CodebarController@barcode')->name('codebar');



});



Route::get('stocks', 'StockChartController@index');

