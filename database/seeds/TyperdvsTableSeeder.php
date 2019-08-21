<?php

use Illuminate\Database\Seeder;

class TyperdvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('typerdvs')->insert([
            'type_rdv' => "Fixe"
        ]);
        \Illuminate\Support\Facades\DB::table('typerdvs')->insert([
            'type_rdv' => "Mobile"
        ]);
    }
}
