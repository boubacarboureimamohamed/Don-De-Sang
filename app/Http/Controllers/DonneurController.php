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
        
        $messageErreur = 
        [
            'nom.required' => 'Le nom du donnneur est réquis!',
            'nom.string' => 'Le nom du donneur ne doit contenir que des lettres!',
            'nom.max' => 'Le nom du donneur ne doit pas dépasser 50 caracteres!',
            'prenom.required' => 'Le prénom du donnneur est réquis!',
            'prenom.string' => 'Le prenom du donneur ne doit contenir que des lettres!',
            'prenom.max' => 'Le prénom du donneur ne doit pas dépasser 50 caracteres!',
            'email.max' => 'Adresse mail ne doit pas dépasser 30 caracteres!',
            'email.unique' => 'Adresse mail doit être unique!',
            'email.email' => 'Adresse mail doit être valide!',
            'lieu_naiss.required' => 'Le lieu de naissance du donneur est réquis!',
            'lieu_naiss.max' => 'Le lieu de naissance du donneur ne doit pas dépasser 20 caracteres!',
            'sexe.required' => 'Le sexe du donneur est réquis!',
            'adresse.required' =>'Adresse du donneur est réquis!',
            'nationalite.required' => 'La nationnalité du donneur est réquis!',
            'nationalite.alpha' => 'La nationalité du donneur ne doit contenir que des lettres!',
            'profession.required' => 'La profession du donneur est réquis!',
            'profession.alpha' => 'La profession du donneur ne doit contenir que des lettres!',
            'telephone.required' => 'Le numero du telephone du donneur est réquis!',
            'telephone.max' => 'Le numéro du telephone du donneur ne doit pas dépasser 8 chiffres!',
            'date_naiss.required' => 'La date de naissance de donneur est réquise!'
            
        ]; 
      $validation =  $this->validate($request, 
      [
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'email' => 'email|max:30|unique:donneurs',
            'lieu_naiss' => 'required|string',
            'sexe' => 'required',
            'adresse' => 'required|string',
            'nationalite' => 'required|alpha',
            'profession' => 'required|alpha',
            'telephone' => 'required|string|max:20|',
            'date_naiss' => 'required|date'

        ], $messageErreur);
        /* if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        } */
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
        return redirect(route('donneurs.index'))->with('success', 'La suppression a été effetué avec succés!');
    }
    public function edit($id)
    {
        $donneur = Donneur::find($id);
        return view('donneurs.edit', compact('donneur'));
    }

    public function update(Request $request, Donneur $donneur)
    {
        $messageErreur = 
        [
            'nom.required' => 'Le nom du donnneur est réquis!',
            'nom.string' => 'Le nom du donneur ne doit contenir que des lettres!',
            'nom.max' => 'Le nom du donneur ne doit pas dépasser 50 caracteres!',
            'prenom.required' => 'Le prénom du donnneur est réquis!',
            'prenom.string' => 'Le prenom du donneur ne doit contenir que des lettres!',
            'prenom.max' => 'Le prénom du donneur ne doit pas dépasser 50 caracteres!',
            'email.max' => 'Adresse mail ne doit pas dépasser 30 caracteres!',
            'email.email' => 'Adresse mail doit être valide!',
            'lieu_naiss.required' => 'Le lieu de naissance du donneur est réquis!',
            'lieu_naiss.max' => 'Le lieu de naissance du donneur ne doit pas dépasser 20 caracteres!',
            'sexe.required' => 'Le sexe du donneur est réquis!',
            'adresse.required' =>'Adresse du donneur est réquis!',
            'nationalite.required' => 'La nationnalité du donneur est réquis!',
            'nationalite.alpha' => 'La nationalité du donneur ne doit contenir que des lettres!',
            'profession.required' => 'La profession du donneur est réquis!',
            'profession.alpha' => 'La profession du donneur ne doit contenir que des lettres!',
            'telephone.required' => 'Le numero du telephone du donneur est réquis!',
            'telephone.max' => 'Le numéro du telephone du donneur ne doit pas dépasser 8 chiffres!',
            'date_naiss.required' => 'La date de naissance de donneur est réquise!'
        ];

        $validation = $this->validate($request, [
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'email' => 'email|max:30',
            'lieu_naiss' => 'required|string',
            'sexe' => 'required',
            'adresse' => 'required|string',
            'nationalite' => 'required|alpha',
            'profession' => 'required|alpha',
            'telephone' => 'required|string|max:20|',
            'date_naiss' => 'required|date'
        ],$messageErreur);

        /* if($validation->fails())
        {
            $returnData = array(
                'status'=>'error',
                'message'=>'veuillez revoir les champs',
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        } */

        $donneur->update([
            'nom' => $request->nom,
            'PrenomA' => $request->PrenomA,
            'prenom' => $request->prenom,
            'lieu_naiss' => $request->lieu_naiss,
            'date_naiss,' => $request->date_naiss,
            'sexe' => $request->sexe,
            'situationmariee' => $request->situationmariee,
            'situation_matrimoniale' => $request->situation_matrimoniale,
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
        //dd($as);
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
