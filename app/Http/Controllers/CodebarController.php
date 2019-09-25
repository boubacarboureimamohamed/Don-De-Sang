<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodebarController extends Controller
{
    public function barcode()
    {
        return view('codebar');
    }
}
