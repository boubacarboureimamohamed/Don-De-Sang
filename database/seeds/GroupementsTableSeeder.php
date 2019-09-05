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
            'groupe_sanguin' => "A+"
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "B+"
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "AB+"
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "O+"
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "A-"
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "B-"
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "AB-"
        ]);
        \Illuminate\Support\Facades\DB::table('groupements')->insert([
            'groupe_sanguin' => "O-"
        ]);
    }
}
