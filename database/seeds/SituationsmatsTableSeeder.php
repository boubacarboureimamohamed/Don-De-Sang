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
        for ($i=0; $i < 3 ;$i++ )
        {
            \Illuminate\Support\Facades\DB::table('situation_mats')->insert([
                'situation_matrimoniale' => "marie$i"
            ]);
        }
    }
}
