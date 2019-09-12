<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        $groupe = DB::select("SELECT g.id
        FROM stocks s, groupements g
        WHERE s.groupement_id = g.id and s.id in
       (select max(id) from stocks s where groupement_id in
       (select id from groupements where seuil > s.quantite_reelle) group by groupement_id)");
       
      
        if (! $request->expectsJson()) {
            return route('login');
        }  

        // if(!empty($groupe))
        // {
            
        //     return back()->with('success','le groupe  a atteint son seuil minimal');
        
        // }
    
    }
    
}
