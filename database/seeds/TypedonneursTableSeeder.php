<?php

use Illuminate\Database\Seeder;

class TypedonneursTableSeeder extends Seeder
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
            \Illuminate\Support\Facades\DB::table('typedonneurs')->insert([
                'type_donneur' => "Collecte$i"
            ]);
        }
    }
}
