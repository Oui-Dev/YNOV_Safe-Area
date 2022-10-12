@component('mail::message')
    {!! $body !!}


        <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>
        <br>
        Email généré automatiquement, aucune réponse n'est attendue
@endcomponent
