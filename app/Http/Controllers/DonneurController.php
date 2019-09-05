<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donneur;
use App\Models\Typedonneur;
use App\Models\Organisation;
use App\Models\SituationMat;

class DonneurController extends Controller
{
    public function adddonneur()
    {
        $ts = Typedonneur::all();
        $os = Organisation::all();
        $ps = SituationMat::all();
        return view('donneurs.add', compact('ts','os','ps'));
    }

    public function store(Request $request)
    {



        /* $this->validate($request, [
            'num_donneur' => 'required|string|max:20',
            'nom' => 'required|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:donneurs',
            'lieu_naiss' => 'required|string|max:255',
            'sexe' => 'required',
            'adresse' => 'required|string',
            'nationalite' => 'required|string',
            'profession' => 'required|string',
            'telephone' => 'required|integer|max:8|min:8',

        ]); */


        $donneur= Donneur::create($request->all());
        $donneur->update([
            'num_donneur' => 'DO/' . date('Ymd') . '/' . $donneur->id
        ]);
       SituationMat::create([
                'situation_matrimoniale'=>$request->situation_matrimoniale,
                'situationmariee'=>$request->situationmariee
        ]);
        $donneur->situationmats()->attach($request->situation_mat_id,['date' => date('Y-m-d')]);
         
        return redirect(route('donneurs.index'));
    }
    public function index()
    {
        $donneurs = Donneur::with('typedonneur','situationmats','organisation')->get();
        return view('donneurs.index', compact('donneurs'));
    }
    public function destroy($id)
    {
        Donneur::destroy($id);
        /* flash("success, Le donneur a été suprimée.")->success(); */
        return redirect()->back();
    }
    public function edit($id)
    {
        $donneur = Donneur::find($id);
        $ts = Typedonneur::all();
        $os = Organisation::all();
        $ps = SituationMat::all();
        return view('donneurs.edit', compact('donneur', 'ts','os','ps'));
    }

    public function update(Request $request, Donneur $donneur)
    {
        $this->validate($request, [
            'num_donneur' => 'required|string|max:20',
            'nom' => 'required|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:donneurs',
            'lieu_naiss' => 'required|string|max:255',
            'sexe' => 'required',
            'adresse' => 'required|string',
            'nationalite' => 'required|string',
            'profession' => 'required|string',
            'telephone' => 'required|integer|max:8|min:8',
        ]);
        $donneur->update([
            'num_donneur' => $request->num_donneur,
            'nom' => $request->nom,
            'PrenomA' => $request->PrenomA,
            'prenom' => $request->prenom,
            'lieu_naiss' => $request->lieu_naiss,
            'date_naiss,' => $request->date_naiss,
            'sexe' => $request->sexe,
            'adresse' => $request->adresse,
            'nationalite' => $request->nationalite,
            'profession' => $request->profession,
            'telephone,' => $request->telephone,
            'email,' => $request->email,
            'typedonneur_id' => $request->typedonneur_id,
            'organisation_id' => $request->organisation_id,
        ]);
      
        $donneur->situationmats()->updateExistingPivot($request->situation_mat_id,['date' => date('Y-m-d')]);
        /* flash("success, L'donneur a été modifier.")->success(); */
        return redirect(route('donneurs.index'));
    }

    public function show(Donneur $donneur)
    {
        $as = Donneur::with('situationmats')->whereId($donneur->id)->get()[0];
        $ls = Donneur::with('typedonneur','organisation')->whereId($donneur->id)->get()[0];
        return view('donneurs.show', compact('as','ls'));
    }

}
