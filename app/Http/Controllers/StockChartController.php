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
        $stocks = DB::select("SELECT s.quantite_reelle
                             FROM stocks s, groupements g
                            WHERE s.groupement_id = g.id and s.id in
                            (select max(id) from stocks where groupement_id in
                            (select id from groupements) group by groupement_id)");
        $data = [];
        foreach($stocks as $stock)
        {
            $data[] = $stock->quantite_reelle;
        }
        return view('stocks',compact('labels','data'));
    }

}
