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
        return view('home',compact('labels','data'));
    }

}
