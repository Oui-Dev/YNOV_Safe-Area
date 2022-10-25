@component('mail::message')
Une nouvelle demande de contact à été envoyée le {{now()->format('d/m/Y H:i')}}.


- Prénom: {{$firstname}}
- Nom: {{$lastname}}
- Adresse email: <a href="mailto:{{$email}}">{{$email}}</a>
- Numéro de téléphone: <a href="tel:{{$phone}}">{{$phone}}</a>


## {{$subject}}


{{$message}}


    <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>

    Email généré automatiquement, aucune réponse n'est attendue
@endcomponent
