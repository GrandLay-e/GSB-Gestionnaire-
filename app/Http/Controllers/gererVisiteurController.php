<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;

class gererVisiteurController extends Controller{
    function choisirVisiteur(Request $request){
        if( session('gestionnaire') != null){
            $lesVisiteurs = PdoGsb::getLesVisiteurs();
            $view = view('choisirVisiteur')
                    ->with('lesVisiteurs', $lesVisiteurs)
                    ->with('visiteurChoisi', null)
                    ->with('numMois', null)
                    ->with('numAnnee', null)
                    ->with('erreurs',null)
                    ->with('message',"")
                    ->with ('method',$request->method());
            return $view;
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }
}
