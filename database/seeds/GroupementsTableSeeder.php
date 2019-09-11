<?php

use Illuminate\Database\Seeder;

class GroupementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "A+",
            'seuil' => 10
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "B+",
            'seuil' => 10
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "AB+",
            'seuil' => 10
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "O+",
            'seuil' => 10
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "A-",
            'seuil' => 10
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "B-",
            'seuil' => 10
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "AB-",
            'seuil' => 10
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "O-",
            'seuil' => 10
        ]);
    }
}
