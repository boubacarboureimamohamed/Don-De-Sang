<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DossierMedical;

class DossierMedicalValidationController extends Controller
{
    public function donneur_a_valider()
    {
        $validations = DossierMedical::with('donneur')->get();
        return view('validation.donneur_a_valider', compact('validations'));
    }
    public function validation($id)
    {
        $dossier = DossierMedical::find($id);
        return view('validation.validation', compact('dossier'));
    }
    public function store(Request $request, DossierMedical $dossier)
    {
        dd($dossier);
        $dossier->update([
            'rejet' => $request->rejet,
            'motif_rejet' => $request->motif_rejet,
        ]);

        return redirect(route('validation.donneur_a_valider'));
    }
}
