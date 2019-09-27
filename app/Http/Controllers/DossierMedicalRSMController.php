<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Donneur;
use App\Models\DossierMedical;
use Illuminate\Support\Carbon;

class DossierMedicalRSMController extends Controller
{
    public function index()
    {
        $donneurs = Donneur::with('typedonneurs','situationmats','organisation','dossierMedicals')->get();

        $donneurs = $donneurs->filter(function($donneur) {

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
        return view('dossierM.index', compact('donneurs'));
    }
    public function examiner($id)
    {
        $donneur = Donneur::find($id);
        return view('dossierM.examiner', compact('donneur'));
    }
    public function store(Request $request)
    {
        
        $messageErreur = 
        [
            'poid.required' => 'Le poid du donnneur est réquis!',
            'poid.integer' => 'Le poid du donneur ne doit contenir que des chiffres!',
            'temperature.required' => 'La témperature du donneur est réquise',
            'temperature.numeric' => 'La température du donneur ne doit contenir que des chiffres ou des chiffres à virgule!',
            'temperature.max' => 'La température du donneur ne doit pas dépasser 3 caracteres!',
            'tension_arterielle.integer' => 'La tension artérielle du donneur ne doit contenir que des chiffres!',
            'tension_arterielle.required' => 'La tension artérielle du donneur est réquise!',
            'tension_arterielle.max' => 'La tension artérielle du donneur ne doit pas dépasser 3 chiffres',
            'quantite_a_prelevee.integer' => 'La quantité à prelevée ne doit contenir que des chiffres!',
            'quantite_a_prelevee.required' => 'La quantité à prélevée est réquise!',
            'quantite_a_prelevee.max' => 'La quantité à prélevée ne doit pas dépasser 3 caracteres!',
            'quantite_a_prelevee.min' => 'La quantité à prélevée doit contenir au moins 3 caracteres !',
            'approbation.required' => 'L approbation est réquis!'
               
        ];

        $validation = $this->validate($request, [
            'poid' => 'required|integer',
            'temperature' => 'required|numeric',
            'tension_arterielle' => 'required|integer',
            'observation_approbation' => 'string',
            'quantite_a_prelevee' => 'required|integer',
            'approbation' => 'required',
        ], $messageErreur);

       /*  if($validation->fails())
        {
            $returnData = array(
                'status'=>'error',
                'message'=>'veuillez revoir les champs',
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        } */

        $dossier = DossierMedical::create([
            'poid' => $request->poid,
            'temperature' => $request->temperature,
            'tension_arterielle' => $request->tension_arterielle,
            'date_dossier_medical' => date('Y-m-d'),
            'approbation' => $request->approbation,
            'observation_approbation' => $request->observation_approbation,
            'quantite_a_prelevee' => $request->quantite_a_prelevee,
            'donneur_id' => $request->donneur_id,
        ]);
        if ($dossier->approbation == 1)
        {
            $dossier->update([
                'num_don' => 'DON-' . date('Y-m-d') . '-' . $dossier->id
            ]);

        }
        return redirect(route('donneurs.index'));
    }
    public function donneur_apte()
    {
        //$donneur_aptes = DossierMedical::with('donneur')->get();
        $donneurs= Donneur::with('dossierMedicals')->get();
        return view('dossierM.donneur_apte',compact('donneurs'));
    }
    public function donneur_inapte()
    {
        //$donneur_aptes = DossierMedical::with('donneur')->get();
        $donneur_inaptes= DossierMedical::with('donneur')->get();
        return view('dossierM.donneur_inapte',compact('donneur_inaptes'));
    }
    public function show_apte(DossierMedical $donneur_apte)
    {
        //dd($donneur_apte->donneur->id);
       /*  $aptes =DossierMedical::with(['donneur' => function($query) use($donneur_apte){
            return $query->where('id', '=',$donneur_apte->donneur->id);
        }])->get(); */
        $aptes = $donneur_apte->donneur->dossierMedicals;
        $a = $donneur_apte->donneur;
        //$a = DossierMedical::with('donneur')->whereId($donneur_apte->donneur->id)->get();
        //dd($donneur_apte->donneur);
        return view('dossierM.show_apte',compact('aptes','a'));
    }

    public function donneurs_examiner()
    {
        $donneursexaminers = DossierMedical::with('donneur')->where('quantite_prelevee', null)->get();
        return view('dossierM.donneursexaminer', compact('donneursexaminers'));
    }

    public function edit_donneursexaminer($id)
    {
      $donneurexaminer = DossierMedical::with('donneur')->find($id);
      $donneur = Donneur::find($id);

      return view('dossierM.editdonneursexaminer', compact('donneurexaminer','donneur'));
    }

    public function update_donneursexaminer(Request $request, DossierMedical $donneurexaminer)
    {
        $messageErreur = 
        [
            'poid.required' => 'Le poid du donnneur est réquis!',
            'poid.integer' => 'Le poid du donneur ne doit contenir que des chiffres!',
            'temperature.required' => 'La témperature du donneur est réquise',
            'temperature.integer' => 'La température du donneur ne doit contenir que des chiffres ou des chiffres à virgule!',
            'temperature.max' => 'La température du donneur ne doit pas dépasser 3 caracteres!',
            'tension_arterielle.integer' => 'La tension artérielle du donneur ne doit contenir que des chiffres!',
            'tension_arterielle.required' => 'La tension artérielle du donneur est réquise!',
            'tension_arterielle.max' => 'La tension artérielle du donneur ne doit pas dépasser 3 chiffres',
            'quantite_a_prelevee.integer' => 'La quantité à prelevée ne doit contenir que des chiffres!',
            'quantite_a_prelevee.required' => 'La quantité à prélevée est réquise!',
            'quantite_a_prelevee.max' => 'La quantité à prélevée ne doit pas dépasser 3 caracteres!',
            'quantite_a_prelevee.min' => 'La quantité à prélevée doit contenir au moins 3 caracteres !',
            'approbation.required' => 'L approbation est réquis!',    
        ];
        $this->validate($request, [
            'poid' => 'required|integer',
            'temperature' => 'required|integer',
            'tension_arterielle' => 'required|integer',
            'observation_approbation' => 'string',
            'quantite_a_prelevee' => 'required|integer',
            'approbation' => 'required',
        ], $messageErreur);

        /* if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        } */


        $donneurexaminer->update([
        'poid'=>$request->poid,
        'temperature'=>$request->temperature,
        'tension_arterielle'=>$request->tension_arterielle,
        'date_dossier_medical' => date('Y-m-d'),
        'approbation'=> $request->approbation,
        'quantite_a_prelevee'=>$request->quantite_a_prelevee

     ]);

     return redirect(route('dossierM.donneursexaminer'));
    }


    public function destroy($id)
    {
        Donneur::destroy($id);
    }
    
    public function dossiermedical()
    {
        $donneurs = DB::select("SELECT  DISTINCT d.id, d.num_donneur, d.nom, d.prenom 
                                FROM donneurs d, dossier_medicals dm 
                                WHERE dm.donneur_id =d.id" 
                              );
        return view('dossierM.dossiermedical', compact('donneurs'));
    }
    public function show_dossiermedical(DossierMedical $donneur)
    {
        $dossiers = DossierMedical::with('donneur')->where('donneur_id', $donneur->id)->get();
        $donneur = Donneur::where('id', $donneur->id)->get()[0];
        //dd($dossiers);
        return view('dossierM.show_dossiermedical',compact('dossiers','donneur'));
    }

}
