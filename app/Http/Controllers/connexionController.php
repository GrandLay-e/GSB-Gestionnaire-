<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PdoGsb; // Ensure you have this class and namespace available

class ConnexionController extends Controller
{
    function connecter(){
        return view('connexion')->with('erreurs',null);
    }
    function valider(Request $request){
        $login = $request['login'];
        $mdp = $request['mdp'];
        $gestionnaire = PdoGsb::getInfosGestionnaire($login,$mdp);
        if(!isset($gestionnaire)){
            $visiteur = PdoGsb::getInfosVisiteur($login,$mdp);
            if(!is_array($visiteur)){
                $erreurs[] = "Login ou mot de passe incorrect(s)";
                return view('connexion')->with('erreurs',$erreurs);
            }
            else{
                session(['visiteur' => $visiteur]);
                return view('sommaire')->with('visiteur',session('visiteur'));
            }
        }else{
            session(['gestionnaire' => $gestionnaire]);
            return view('sommaireGestionnaire')->with('gestionnaire',session('gestionnaire'));
        }
    }
    function deconnecter(){
            session(['visiteur' => null]);
            return redirect()->route('chemin_connexion');
    }

}
