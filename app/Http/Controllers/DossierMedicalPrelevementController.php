<?php

namespace App\Http\Controllers;

use App\Models\DossierMedical;
use App\Models\Donneur;

use Illuminate\Http\Request;

class DossierMedicalPrelevementController extends Controller
{
    public function donneur_apte_a_prelevee()
    {
        $dossiers = DossierMedical::with('donneur')->get();
        return view('prelevement.donneur_apte_a_prelevee', compact('dossiers'));
    }
    public function prelever($id)
    {
        $donneur = Donneur::find($id);
        $dossier= DossierMedical::find($id);
        return view('prelevement.prelever', compact('donneur','dossier'));
    }
    public function store(Request $request, DossierMedical $dossier)
    {
        /* dd($request->all()); */
        $dossier->update([
            'type_prelevement' => $request->type_prelevement,
            'type_poche' => $request->type_poche,
            'observation_prelevement' => $request->observation_prelevement,
            'quantite_prelevee' => $request->quantite_prelevee,
            'date_heure_prelevement' => date('Y-m-d')
        ]);
        dd($dossier);
        return redirect(route('prelevement.donneur_apte_a_prelevee'));
    }
}
