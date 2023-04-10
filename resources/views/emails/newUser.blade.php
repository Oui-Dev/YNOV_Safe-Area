@component('mail::message')
    L'entreprise {{ $company }} vient de vous créer un compte sur {{ config('app.name') }}.

    Vous pouvez vous connecter avec les identifiants suivants :
    - Identifiant: {{ $identifiant }}
    - Mot de passe: {{ $password }}

    Nous vous invitons à changer votre mot de passe dès votre première connexion.


    <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>

    Email généré automatiquement, aucune réponse n'est attendue
@endcomponent
