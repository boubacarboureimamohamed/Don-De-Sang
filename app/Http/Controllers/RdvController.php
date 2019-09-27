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
        $messageErreur = 
        [
            'libelle.required' => 'Le nom de l organisation est obligatoire!',
            'libelle.max' => 'Le nom de l organisation ne doit pas dépasser 50 caracteres!',
            'email.max' => 'Adresse mail ne doit pas dépasser 30 caracteres!',
            'email.unique' => 'Adresse mail doit être unique!',
            'email.email' => 'Adresse mail doit être valide!',
            'adresse.required' =>'Adresse du donneur est obligatoire!',
            'telephone.required' => 'Le numero du telephone du donneur est obligatoire!',
            'telephone.max' => 'Le numéro du telephone de l organisation ne doit pas dépasser 8 chiffres!',
            'telephone.unique' => 'Le numéro de telephone de l organisation doit être unique',
            'date_heure.required' => 'La et heure de rendez vous est obligatoire!',
            'lieu.required' => 'Le lieu de rendez vous est obligatoire',
            'adresse.string' => 'Adresse de l organisation peut contenir des lettre, des chiffres'
        ];

        $validation = $this->validate($request, [
            'libelle' => 'required|string|max:50',
            'telephone' => 'required|string|max:20|unique:organisations',
            'adresse' => 'string|required',
            'email' => 'email|max:30|unique:organisations',
            'date_heure' => 'required|string',
            'lieu' => 'required|string'
            
            
        ],$messageErreur);

       /*  if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        } */

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
            return redirect(route('rdvs.rdv_fixe_liste'))->with('success', 'Lenregistrement a ete effetue avec succes');
        }
        elseif($request->typerdv_id == 2)
        {
            return redirect(route('rdvs.rdv_mobile_liste'))->with('success', 'Lenregistrement a ete effetue avec succes');
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

        $messageErreur = 
        [
            'libelle.required' => 'Le nom de l organisation est obligatoire!',
            'libelle.max' => 'Le nom de l organisation ne doit pas dépasser 50 caracteres!',
            'email.max' => 'Adresse mail ne doit pas dépasser 30 caracteres!',
            'email.email' => 'Adresse mail doit être valide!',
            'adresse.required' =>'Adresse du donneur est obligatoire!',
            'telephone.required' => 'Le numero du telephone du donneur est obligatoire!',
            'telephone.max' => 'Le numéro du telephone de l organisation ne doit pas dépasser 8 chiffres!',
            'date_heure.required' => 'La et heure de rendez vous est obligatoire!',
            'lieu.required' => 'Le lieu de rendez vous est obligatoire',
            'adresse.string' => 'Adresse de l organisation peut contenir des lettre, des chiffres...etc'
        ];

        $validation = $this->validate($request, [
            'libelle' => 'required|string|max:50',
            'telephone' => 'required|string|max:20',
            'adresse' => 'string|required',
            'email' => 'email|max:30',
            'date_heure' => 'required|string',
            'lieu' => 'required|string'
            
            
        ],$messageErreur);

        /* if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        } */

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
            return redirect(route('rdvs.rdv_fixe_liste'))->with('success', 'La modification a été effetué avec succés!');
        }
        elseif($request->typerdv_id == 2)
        {
            return redirect(route('rdvs.rdv_mobile_liste'))->with('success', 'La modification a été effetué avec succés!');
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
        return redirect()->back()->with('success', 'La suppression a été effetué avec succés!');
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
