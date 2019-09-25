<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donneur;
use App\Models\Typedonneur;
use App\Models\Organisation;
use App\Models\SituationMat;
use Illuminate\Support\Carbon;

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
        $this->validate($request, [
            'nom' => 'required|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:donneurs',
            'lieu_naiss' => 'required|string|max:255',
            'sexe' => 'required',
            'adresse' => 'required|string',
            'nationalite' => 'required|string',
            'profession' => 'required|string',
            /* 'telephone' => 'required|integer|max:8|min:8', */

        ]);
        $donneur= Donneur::create($request->all());
        $donneur->update([
            'num_donneur' => 'DO/' . date('Ymd') . '/' . $donneur->id
        ]);
       $situation = SituationMat::create([
                'situation_matrimoniale'=>$request->situation_matrimoniale,
                'situationmariee'=>$request->situationmariee
        ]);

        $donneur->typedonneurs()->attach($request->typedonneur_id,['date' => date('Y-m-d')]);
        $donneur->situationmats()->attach($situation->id,['date' => date('Y-m-d')]);
        $donneur->organisations()->attach($request->organisation_id,['date' => date('Y-m-d')]);

        return redirect(route('donneurs.index'))->with('success', 'Lenregistrement a été effetué avec succés!');
    }
    public function index()
    {
        $donneurs = Donneur::with('typedonneurs','situationmats','organisations','dossierMedicals')->get();

        $donneursapreleves = $donneurs->filter(function($donneur) {
            $last = $donneur->dossierMedicals->last();
            if($last)
            {
                $ago = $last->created_at->addMonths(3);
                 $current = Carbon::today();
                 return $current->greaterThanOrEqualTo($ago);

            }else {
                return true;
            }

        });
        //dd($donneurs, $donneursapreleves);
        return view('donneurs.index', compact('donneurs','donneursapreleves'));
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
        return view('donneurs.edit', compact('donneur'));
    }

    public function update(Request $request, Donneur $donneur)
    {
        /* $this->validate($request, [
            'nom' => 'required|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:donneurs',
            'lieu_naiss' => 'required|string|max:255',
            'sexe' => 'required',
            'adresse' => 'required|string',
            'nationalite' => 'required|string',
            'profession' => 'required|string',
            /* 'telephone' => 'required|integer|max:8|min:8', 
        ]); */
        $donneur->update([
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
            'email,' => $request->email
        ]);

        //$donneur->situationmats()->updateExistingPivot($request->situation_mat_id,['date' => date('Y-m-d')]);
        return redirect(route('donneurs.index'))->with('success', 'La modification a été effetué avec succés!');
    }

    public function show(Donneur $donneur)
    {
        $ts = Typedonneur::all();
        $os = Organisation::all();
        $as = Donneur::with('situationmats','typedonneurs','organisations')->whereId($donneur->id)->get()[0];
        $ls = Donneur::with('organisations')->whereId($donneur->id)->get()[0];
        return view('donneurs.show', compact('as','ls','ts','os'));
    }

    public function storesituation(Request $request)
    {
        $donneur = Donneur::find($request->donneur);
        $situation = SituationMat::create([
            'situation_matrimoniale'=>$request->situation_matrimoniale,
            'situationmariee'=>$request->situationmariee
        ]);
    $donneur->situationmats()->attach($situation->id,['date' => date('Y-m-d')]);
    return back();
    }
    public function storetypedonneur(Request $request)
    {
        $donneur = Donneur::find($request->donneur);
        $donneur->typedonneurs()->attach($request->typedonneur_id,['date' => date('Y-m-d')]);
        $donneur->organisations()->attach($request->organisation_id,['date' => date('Y-m-d')]);
        return back();
    }

    public function updatesituation(Request $request, SituationMat $situation)
    {
        $situation->update([
            'situation_matrimoniale'=>$request->situation_matrimoniale,
            'situationmariee'=>$request->situationmariee
        ]);
        return back();
    }
}
