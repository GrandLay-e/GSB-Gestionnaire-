<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;

class gererVisiteurController extends Controller{
    function choisirVisiteur(Request $request){
        if( session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $lesVisiteurs = PdoGsb::getLesVisiteurs();
            $view = view('choisirVisiteur')
                ->with('lesVisiteurs', $lesVisiteurs)
                ->with('gestionnaire', $gestionnaire)
                ->with ('method',$request->method());
            return $view;
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }
}
