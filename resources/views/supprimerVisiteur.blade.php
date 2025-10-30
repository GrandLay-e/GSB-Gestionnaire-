@extends ('sommaireGestionnaire')
@section('contenu1')

    <div id="contenu">
        <h2>Les visiteurs </h2>
        <h3>Visiteur à supprimer</h3>
        <form action="{{ route('chemin_validerSuppressionVisiteur') }}" method="post">
            {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
            <div class="corpsForm"><p>
                   <!-- <label for="lstMois" >Mois : </label> !-->
                    <select id="lstVisiteur" name="lstVisiteur">
                        @foreach($lesVisiteurs as $visiteur)
                            <option value="{{ $visiteur['id'] }}">
                                {{ $visiteur['nom']}} {{ $visiteur['prenom'] }}
                            </option>
                        @endforeach
                    </select>
                </p>
            </div>
            <div class="piedForm">
                    <input id ="nomCompletVisiteur" type="hidden" name="completeName" value="{{ $visiteur['nom'] ." ". $visiteur['prenom']}}" />
                    <input type="hidden" name="idvisiteur" value="{{ $visiteur['id'] }}" />
                    <input id="ok" type="submit" value="Supprimer" size="20" />
            </div>
        </form>
    @push('scripts')
        <script src="{{asset('js/confirmSuppression.js')}}"> </script>
    @endpush
@endsection
