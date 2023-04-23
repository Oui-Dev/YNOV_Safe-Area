@component('mail::message')
Une demande pour lever l'anonymat sur la plainte <i>{{ $complain->reference }}</i> vient d'être soumise.

Pour répondre favorablement ou non merci de cliquer sur le liens ci dessous.
    
Liens valide durant 48h a partir du {{now()->format('d/m/Y H:i')}} : <a href="{{ $url }}">Veuillez-cliquer ici</a>

<a href="{{ config('app.url') }}">{{ config('app.name') }}</a>

Email généré automatiquement, aucune réponse n'est attendue.
@endcomponent
