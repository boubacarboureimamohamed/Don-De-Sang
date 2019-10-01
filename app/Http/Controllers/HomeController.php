<?php

namespace App\Http\Controllers;
use App\User;
use App\Charts\StockChart;
use Illuminate\Support\Facades\DB;
use App\Models\Groupement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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
        //dd($data_double,$data_simple);
        return view('home',compact('labels','data_simple', 'data_double'));
    }

}
