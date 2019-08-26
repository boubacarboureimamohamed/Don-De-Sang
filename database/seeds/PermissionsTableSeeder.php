<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => "consulter_donneur"]);

        \Illuminate\Support\Facades\DB::table('permissions')->insert([
                'name' => "creer_donneur"]);

         \Illuminate\Support\Facades\DB::table('permissions')->insert([
                    'name' => "editer_donneur"]);

                    \Illuminate\Support\Facades\DB::table('permissions')->insert([
                        'name' => "consulter_collecte" ]);

                    \Illuminate\Support\Facades\DB::table('permissions')->insert([
                            'name' => "creer_collecte" ]);

                     \Illuminate\Support\Facades\DB::table('permissions')->insert([
                                'name' => "editer_collecte"]);
    }
}
