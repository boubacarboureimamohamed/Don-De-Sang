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
        for ($i=0; $i < 9 ;$i++ )
        {
            \Illuminate\Support\Facades\DB::table('organisations')->insert([
                'libelle' => "IAI$i",
                'adresse' => "Quartier$i",
                'telephone' => "9033982$i",
                'email' => "IAI$i.com"
            ]);
        }
    }
}
