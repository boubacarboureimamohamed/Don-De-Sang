<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\StockChart;

class StockChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stoksChart = new StockChart;
        $stoksChart->labels(['Jan', 'Feb', 'Mar']);
        $stoksChart->dataset('Users by trimester', 'line', [10, 25, 13])
                   ->color("rgb(255, 99, 132)")
                   ->backgroundcolor("rgb(255, 99, 132)");;
        return view('stocks', [ 'stoksChart' => $stoksChart ] );
    }

}
