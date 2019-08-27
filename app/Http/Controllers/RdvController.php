<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rdv;
use App\Models\Typerdv;
use App\Models\Organisation;

class RdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rdvs = Rdv::with('typerdv')->with('organisation')->get();

         return view('rdvs.index', compact('rdvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typerdvs = Typerdv::all();
        $organisations = Organisation::all();
       return view('rdvs.create', compact('typerdvs', 'organisations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organisation = Organisation::firstOrCreate([
            'libelle'=>$request->libelle,
            'telephone'=>$request->telephone,
            'adresse'=>$request->adresse,
            'email'=>$request->email
        ]);

        Rdv::create([
            'date_heure' => $request->date_heure,
            'lieu' => $request->lieu,
            'typerdv_id' => $request->typerdv_id,
            'organisation_id' => $organisation->id
        ]);
        
        if($request->typerdv_id == 1)
        {
            return redirect(route('rdvs.rdv_fixe_liste'));
        }
        elseif($request->typerdv_id == 2)
        {
            return redirect(route('rdvs.rdv_mobile_liste'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typerdvs = Typerdv::all();
        $organisations = Organisation::all();
        $rdv = Rdv::find($id);
        return view('rdvs.edit', compact('typerdvs', 'rdv', 'organisations'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rdv $rdv, Organisation $org)
    {
        $organisation = $org->updateOrCreate([
            'libelle'=>$request->libelle,
            'telephone'=>$request->telephone,
            'adresse'=>$request->adresse,
            'email'=>$request->email
        ]);

        $rdv->update([
            'date_heure' => $request->date_heure,
            'lieu' => $request->lieu,
            'typerdv_id' => $request->typerdv_id,
            'organisation_id' => $organisation->id
        ]);

        if($request->typerdv_id == 1)
        {
            return redirect(route('rdvs.rdv_fixe_liste'));
        }
        elseif($request->typerdv_id == 2)
        {
            return redirect(route('rdvs.rdv_mobile_liste'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rdv::destroy($id);
        return redirect()->back();
    }

    public function rdvfixeliste()
    {
        $rdvsfixes = Rdv::with('typerdv')->with('organisation')->get();
        return view('rdvs.rdv_fixe_liste', compact('rdvsfixes'));
    }

    public function rdvmobileliste()
    {
        $rdvsmobiles = Rdv::with('typerdv', 'organisation')->get();
        return view('rdvs.rdv_mobile_liste', compact('rdvsmobiles'));
    }
}
