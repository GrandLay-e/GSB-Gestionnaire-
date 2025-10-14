@extends('modeles/gestionnaire')
    @section('menu')
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">

            </div>
            <ul id="menuList">
                <li >
                    <strong> {{$gestionnaire['nom']}} {{$gestionnaire['prenom']}} </strong>

                </li>
                <li class="smenu">
                    <a href="{{route('chemin_choisirVisiteur')}}" title="Supprimer visiteur">Suppression de visiteur </a>
                </li>
                <li class="smenu">
                    <a href="{{ route('chemin_deconnexion') }}"" title="Se déconnecter">Déconnexion</a>
                </li>
            </ul>

        </div>
    @endsection
