<?php

namespace App\Http\Controllers;

use App\Models\DossierMedical;
use App\Models\Donneur;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;



use Illuminate\Support\Facades\Mail;



use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;


class DossierMedicalPrelevementController extends Controller
{
    public function donneur_apte_a_prelevee()
    {
        $dossiers = DossierMedical::with('donneur')->where('quantite_prelevee', null)->get();
        return view('prelevement.donneur_apte_a_prelevee', compact('dossiers'));
    }
    public function prelever($id)
    {
        $dossier= DossierMedical::with('donneur')->find($id);
        return view('prelevement.prelever', compact('dossier'));
    }
    public function store(Request $request, DossierMedical $dossier)
    {
        $messageErreur = [
            'quantite_prelevee.required' => 'La quantité prélevée est obligatoire!',
            'quantite_prelevee.integer' => 'La quantité prélevée ne doit contenir que des chiffres!',
            'quantite_prelevee.max' => 'La quantité prélevée doit inférieur ou égale à la quantité à prélevée!'
        ];

        $quantite_prelevve = $dossier->quantite_a_prelevee;
      $validation =  $this->validate($request, [
            'quantite_prelevee' => 'required|integer|max:'.$quantite_prelevve
        ],  $messageErreur);

        if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        }



        $dossier->update([
            'type_prelevement' => $request->type_prelevement,
            'type_poche' => $request->type_poche,
            'observation_prelevement' => $request->observation_prelevement,
            'quantite_prelevee' => $request->quantite_prelevee,
            'date_heure_prelevement' => date('Y-m-d')
        ]);


//         $accountSid = config('app.twilio')['TWILIO_ACCOUNT_SID'];
//         $authToken  = config('app.twilio')['TWILIO_AUTH_TOKEN'];
//         $client = new Client($accountSid, $authToken);
//         try
//         {
//             // Use the client to do fun stuff like send text messages!
//             $client->messages->create(
//             // the number you'd like to send the message to 
//                 $dossier->donneur->telephone,
//            array(
//                  // A Twilio phone number you purchased at twilio.com/console
//                  'from' => '+12056512557',
//                  // the body of the text message you'd like to send
//                  'body' => 'Bonjour M./Mme ' .$dossier->donneur->nom. ' ' .$dossier->donneur->prenom. ' nous vous remercions du don effectué. Sachez que vous sauvez une vie!'
//              )
//          );
//    }
//         catch (Exception $e)
//         {
//             echo "Error: " . $e->getMessage();
//         } 

 
    \Mail::send('prelevement.message', [ ], function ($message) use($dossier) {
 
        $message->from('ammahamadou94@gmail.com', 'team synetcom');
 
        $message->to($dossier->donneur->email)->subject('Notification');
 
    });


        return redirect(route('prelevement.donneur_apte_a_prelevee'));
    }
    public function donneur_prelevee()
    {
        $prelevements = DossierMedical::with('donneur')->whereNotNull('quantite_prelevee')->where('rejet', null)->get();
        return view('prelevement.donneur_prelevee', compact('prelevements'));
    }
    public function show_prelevement(DossierMedical $prelevement)
    {
        return view('prelevement.show_prelevement', compact('prelevement'));
    }
    public function edit($id)
    {
        $prelevement = DossierMedical::with('donneur')->find($id);
        return view('prelevement.edit', compact('prelevement'));
    }
    public function update(Request $request, DossierMedical $prelevement)
    {
        $messageErreur = [
            'quantite_prelevee.required' => 'La quantité prélevée est obligatoire!',
            'quantite_prelevee.integer' => 'La quantité prélevée ne doit contenir que des chiffres!',
            'quantite_prelevee.max' => 'La quantité prélevée doit inférieur ou égale à la quantité à prélevée!'
            
        ];
        $quantite_prelevve = $dossier->quantite_a_prelevee;
         $validation =   $this->validate($request, [
        'quantite_prelevee' => 'required|integer|max:'.$quantite_prelevve
     ], $messageErreur);

     if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        }
        $prelevement->update([
            'type_prelevement' => $request->type_prelevement,
            'type_poche' => $request->type_poche,
            'observation_prelevement' => $request->observation_prelevement,
            'quantite_prelevee' => $request->quantite_prelevee,
            'date_heure_prelevement' => date('Y-m-d')
        ]);
        return redirect(route('prelevement.donneur_prelevee'));
    }


}
