@extends('layouts/no')

@section('content')
    <div class="flex flex-col flex-wrap justify-center content-center p-4 w-full">
        <h2 class="mt-6 mb-6 text-3xl font-bold tracking-tight text-gray-900">Mentions Légales</h2>
        <div class="flow-root w-1/2 max-w-3xl">
            <h3 class="text-2xl font-bold tracking-tight mt-5 mb-2">Informations Légales</h3>
            <p>
                Projet Safe Area - aucun capital lié <br>
                27 rue Raoul Servant, 69007 Lyon <br>
                Non immatriculé au RCS
            </p>
            <h3 class="text-2xl font-bold tracking-tight mt-5 mb-2">Directeur de la publication</h3>
            <p>
                Maxime LARROZE-FRANCEZAT
            <br>
            <h3 class="text-2xl font-bold tracking-tight mt-5 mb-2">Hébergeur</h3>
            <p>
                Maxime LARROZE-FRANCEZAT <br>
                27 rue Raoul Servant, 69007 Lyon <br>
            </p>
            <h3 class="text-2xl font-bold tracking-tight mt-5 mb-2">Données Personnelles</h3>
            <p>
                Conformément à la loi informatique et libertés (article 27 de la loi n°78-17 du 6 janvier 1978), vous disposez d'un droit d'accès, de modification,
                de rectification et de suppression des données vous concernant.
                Pour l'exercer, adressez votre demande à Safe Area, via <a href="{{route('no.public.contact')}}" class="font-bold">notre formulaire</a>, par <a href="mailto:safearea.app@gmail.com" class="font-bold">email</a> ou à YNOV CAMPUS 27 rue Raoul Servant, 69007 Lyon.
            </p>
        </div>
    </div>
@endsection
