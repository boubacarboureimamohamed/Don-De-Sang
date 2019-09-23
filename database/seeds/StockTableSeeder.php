<?php

use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            'quantite_reelle' => 0,
            'groupement_id' => 1,
            'type_poche' => 'Simple'
            ]);
        Stock::create([
            'quantite_reelle' => 0,
            'groupement_id' => 1,
            'type_poche' => 'Double'
            ]);
            Stock::create([
                'quantite_reelle' => 0,
                'groupement_id' => 2,
                'type_poche' => 'Simple'
                ]);
            Stock::create([
                'quantite_reelle' => 0,
                'groupement_id' => 2,
                'type_poche' => 'Double'
                ]);
                Stock::create([
                    'quantite_reelle' => 0,
                    'groupement_id' => 3,
                    'type_poche' => 'Simple'
                    ]);
                Stock::create([
                    'quantite_reelle' => 0,
                    'groupement_id' => 3,
                    'type_poche' => 'Double'
                    ]);
                    Stock::create([
                        'quantite_reelle' => 0,
                        'groupement_id' => 4,
                        'type_poche' => 'Simple'
                        ]);
                    Stock::create([
                        'quantite_reelle' => 0,
                        'groupement_id' => 4,
                        'type_poche' => 'Double'
                        ]);
                        Stock::create([
                            'quantite_reelle' => 0,
                            'groupement_id' => 5,
                            'type_poche' => 'Simple'
                            ]);
                        Stock::create([
                            'quantite_reelle' => 0,
                            'groupement_id' => 5,
                            'type_poche' => 'Double'
                            ]);
                            Stock::create([
                                'quantite_reelle' => 0,
                                'groupement_id' => 6,
                                'type_poche' => 'Simple'
                                ]);
                            Stock::create([
                                'quantite_reelle' => 0,
                                'groupement_id' => 6,
                                'type_poche' => 'Double'
                                ]);
                                Stock::create([
                                    'quantite_reelle' => 0,
                                    'groupement_id' => 7,
                                    'type_poche' => 'Simple'
                                    ]);
                                Stock::create([
                                    'quantite_reelle' => 0,
                                    'groupement_id' => 7,
                                    'type_poche' => 'Double'
                                    ]);
                                    Stock::create([
                                        'quantite_reelle' => 0,
                                        'groupement_id' => 8,
                                        'type_poche' => 'Simple'
                                        ]);
                                    Stock::create([
                                        'quantite_reelle' => 0,
                                        'groupement_id' => 8,
                                        'type_poche' => 'Double'
                                        ]);
    }
}
