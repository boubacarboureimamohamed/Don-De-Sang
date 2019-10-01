<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\StockChart;
use Illuminate\Support\Facades\DB;
use App\Models\Groupement;

class StockChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labels = [];
        $groupages = Groupement::all(['groupe_sanguin']);
        foreach($groupages as $groupe)
        {
            $labels[] = $groupe->groupe_sanguin;
        }
        $stock_doubles = DB::select("SELECT s.quantite_reelle
                                FROM stocks s, groupements g
                            WHERE s.groupement_id = g.id and s.id in
                            (select max(id) from stocks where type_poche = 'Double' and groupement_id in
                            (select id from groupements) group by groupement_id)");
        $stock_simples = DB::select("SELECT s.quantite_reelle
                                    FROM stocks s, groupements g
                                WHERE s.groupement_id = g.id and s.id in
                                (select max(id) from stocks where type_poche = 'Simple' and groupement_id in
                                (select id from groupements) group by groupement_id)");
        $data_double = [];
        foreach($stock_doubles as $stock_double)
        {
            $data_double[] = $stock_double->quantite_reelle;
        }
        $data_simple = [];
        foreach($stock_simples as $stock_simple)
        {
            $data_simple[] = $stock_simple->quantite_reelle;
        }
        return view('stocks',compact('labels','data_double','data_simple'));
    }

}
