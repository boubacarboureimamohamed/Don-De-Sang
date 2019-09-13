<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
             'name' => "ajouter_donneur"]);

        Permission::create([
             'name' => "editer_donneur"]);

        Permission::create([
             'name' => "supprimer_donneur"]);

        Permission::create([
            'name' => "consulter_donneur"]);

        Permission::create([
            'name' => "examiner_donneur"]);

        Permission::create([
            'name' => "prelever_donneur"]);

        Permission::create([
            'name' => "valider_prelevement"]);

        Permission::create([
            'name' => "editer_prelevement"]);

        Permission::create([
            'name' => "consulter_prelevement"]);

        Permission::create([
             'name' => "planifier_collecte" ]);

        Permission::create([
             'name' => "editer_planification"]);

        Permission::create([
             'name' => "supprimer_planification"]);

        Permission::create([
             'name' => "consulter_planification" ]);

        Permission::create([
        'name' => "ajouter_demande"]);

        Permission::create([
            'name' => "editer_demande"]);

        Permission::create([
                'name' => "supprimer_demande"]);

        Permission::create([
            'name' => "consulter_demande"]);

        Permission::create([
            'name' => "ajouter_ligne_demande"]);

        Permission::create([
            'name' => "editer_ligne_demande"]);

        Permission::create([
                'name' => "supprimer_ligne_demande"]);

        Permission::create([
            'name' => "livrer_ligne_demande"]);

        Permission::create([
            'name' => "donneur_apte"]);

        Permission::create([
            'name' => "donneur_inapte"]);

        Permission::create([
            'name' => "don_accepte"]);

        Permission::create([
            'name' => "don_rejete"]);

        Permission::create([
            'name' => "creer_user" ]);

        Permission::create([
            'name' => "editer_user"]);

        Permission::create([
            'name' => "supprimer_user" ]);

        Permission::create([
            'name' => "creer_role" ]);

        Permission::create([
            'name' => "editer_role"]);

        Permission::create([
            'name' => "supprimer_role" ]);


    }
}
