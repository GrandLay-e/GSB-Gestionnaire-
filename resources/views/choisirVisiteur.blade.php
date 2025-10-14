@extends ('sommaireGestionnaire')
@section('contenu1')
    <div id="contenu">
        <h2>Les visiteurs </h2>
        <h3>Visiteur à supprimer</h3>
        <form action="{{ route('chemin_choisirVisiteur') }}" method="post">
            {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
            <div class="corpsForm"><p>
                   <!-- <label for="lstMois" >Mois : </label> !-->
                    <select id="lstVisiteur" name="lstVisiteur">
                        @foreach($lesVisiteurs as $visiteur)
                            <option selected value="{{ $visiteur['nom'] }}">
                                {{ $visiteur['nom']}} {{ $visiteur['prenom'] }}
                            </option>
                        @endforeach
                    </select>
                </p>
            </div>
            <div class="piedForm">
                    <input type="hidden" name="idvisiteur" value="{{ $visiteur['id'] }}" />
                    <input id="ok" type="submit" value="Valider" size="20" />
                    <input id="annuler" type="reset" value="Effacer" size="20" />
            </div>

        </form>
@endsection
