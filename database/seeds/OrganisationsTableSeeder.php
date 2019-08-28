<?php

use Illuminate\Database\Seeder;

class OrganisationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \Illuminate\Support\Facades\DB::table('organisations')->insert([
                'libelle' => "IAI-Niger",
                'adresse' => "Plateau",
                'telephone' => "20192890",
                'email' => "IAI-Niger@.com"
            ]);
            \Illuminate\Support\Facades\DB::table('organisations')->insert([
                'libelle' => "SynetCom",
                'adresse' => "Dar-Est-Salam",
                'telephone' => "20192834",
                'email' => "SynetCom@.com"
            ]);
    }
}
