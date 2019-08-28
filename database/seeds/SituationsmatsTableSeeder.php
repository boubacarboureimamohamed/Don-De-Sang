<?php

use Illuminate\Database\Seeder;

class SituationsmatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \Illuminate\Support\Facades\DB::table('situation_mats')->insert([
                'situation_matrimoniale' => "Célibataire"
            ]);
            \Illuminate\Support\Facades\DB::table('situation_mats')->insert([
                'situation_matrimoniale' => "Dicorcé(e)"
            ]);
            \Illuminate\Support\Facades\DB::table('situation_mats')->insert([
                'situation_matrimoniale' => "Veuf(ve)"
            ]);
            \Illuminate\Support\Facades\DB::table('situation_mats')->insert([
                'situation_matrimoniale' => "Marié(e)"
            ]);
            \Illuminate\Support\Facades\DB::table('situation_mats')->insert([
                'situation_matrimoniale' => "Marié +"
            ]);
    }
}
