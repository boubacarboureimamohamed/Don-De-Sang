<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Groupement;
use App\Models\Donneur;
use App\Models\DossierMedical;
use Illuminate\Support\Carbon;

class SeuilSmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $groupes = Groupement::all();
      $stocks = DB::select("SELECT g.groupe_sanguin,  s.quantite_reelle, g.seuil
        FROM stocks s, groupements g
        WHERE s.groupement_id = g.id and s.id in
        (select max(id) from stocks where groupement_id in
        (select id from groupements) group by groupement_id)");
      return view('seuilsms.create', compact('groupes', 'stocks'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = $request->message;
        $groupe = implode("," , $request->groupe);

        $donneurs = DB::select("select donneurs.telephone, donneurs.nom, donneurs.prenom, dossier_medicals.created_at as date_dernier_don from donneurs, dossier_medicals 
        where donneurs.id = dossier_medicals.donneur_id and dossier_medicals.id in (select max(id) 
        from dossier_medicals where donneur_id in (select id from donneurs) and dossier_medicals.groupement_id in ($groupe) 
        group by donneur_id) and DATEDIFF(CURRENT_DATE, dossier_medicals.created_at) >= 90;");

        dd($donneurs);
        
    }

    /**
     * Display the specified resource.telephone
     *
     * @param  int  $id null
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
