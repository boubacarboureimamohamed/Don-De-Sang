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
            \Illuminate\Support\Facades\DB::table('typedonneurs')->insert([
                'type_donneur' => "Collecte"
            ]);
            \Illuminate\Support\Facades\DB::table('typedonneurs')->insert([
                'type_donneur' => "Volontaire"
            ]);
            \Illuminate\Support\Facades\DB::table('typedonneurs')->insert([
                'type_donneur' => "Famille"
            ]);
    }
}
