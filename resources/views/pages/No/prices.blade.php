@extends('layouts/no')

@section('content')
<div class="bg-white mt-8">
    <!-- Comparison table -->
    <div class="mx-auto max-w-2xl bg-white py-8 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="hidden lg:block">
            <table class="h-px w-full table-fixed">
                <caption class="sr-only">
                    Prix
                </caption>
                <thead>
                <tr>
                    <th class="pb-4 pl-6 pr-6 text-left text-sm font-medium text-gray-900" scope="col">
                        <span class="sr-only">Feature by</span>
                        <span>Abonnements</span>
                    </th>

                    <th class="w-1/4 px-6 pb-4 text-left text-lg font-medium leading-6 text-gray-900" scope="col">Essentiel</th>

                    <th class="w-1/4 px-6 pb-4 text-left text-lg font-medium leading-6 text-gray-900" scope="col">Professionnel</th>

                    <th class="w-1/4 px-6 pb-4 text-left text-lg font-medium leading-6 text-gray-900" scope="col">Entreprise</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 border-t border-gray-200">
                <tr>
                    <th class="py-8 pl-6 pr-6 text-left align-top text-sm font-medium text-gray-900" scope="row">Prix</th>

                    <td class="h-full py-8 px-6 align-top">
                        <div class="flex h-full flex-col justify-between">
                            <div>
                                <p>
                                    <span class="text-4xl font-bold tracking-tight text-gray-900">19 €</span>
                                    <span class="text-base font-medium text-gray-500">/mois + prix utilisateurs</span>
                                </p>
                                <p class="mt-4 text-sm text-gray-500">Utile pour les TPE ayant besoins de l'essentiel</p>
                            </div>
                        </div>
                    </td>

                    <td class="h-full py-8 px-6 align-top">
                        <div class="flex h-full flex-col justify-between">
                            <div>
                                <p>
                                    <span class="text-4xl font-bold tracking-tight text-gray-900">39 €</span>
                                    <span class="text-base font-medium text-gray-500">/mois + prix utilisateurs</span>
                                </p>
                                <p class="mt-4 text-sm text-gray-500">Idéale pour les PME, avec une gestion améliorée</p>
                            </div>
                        </div>
                    </td>

                    <td class="h-full py-8 px-6 align-top">
                        <div class="flex h-full flex-col justify-between">
                            <div>
                                <p>
                                    <span class="text-4xl font-bold tracking-tight text-gray-900">59 €</span>
                                    <span class="text-base font-medium text-gray-500">/mois + prix utilisateurs</span>
                                </p>
                                <p class="mt-4 text-sm text-gray-500">Pour les grandes entreprises, avec une gestion détaillée</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Engagement</th>

                    <td class="py-5 px-6">
                        <span class="block text-sm text-gray-700">12 mois renouvelable</span>
                    </td>
                    <td class="py-5 px-6">
                        <span class="block text-sm text-gray-700">12 mois renouvelable</span>
                    </td>
                    <td class="py-5 px-6">
                        <span class="block text-sm text-gray-700">12 mois renouvelable</span>
                    </td>
                </tr>
                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Prix pour 1 utilisateur</th>

                    <td class="py-5 px-6">
                        <span class="block text-sm text-gray-700">1€ /mois</span>
                    </td>
                    <td class="py-5 px-6">
                        <span class="block text-sm text-gray-700">0,92€ /mois <br> (économie de 2,40€ dès 30 utilisateurs)</span>
                    </td>
                    <td class="py-5 px-6">
                        <span class="block text-sm text-gray-700">0,80€ /mois <br> (économie de 6€ dès 30 utilisateurs)</span>
                    </td>
                </tr>

                <tr>
                    <th class="bg-gray-50 py-3 pl-6 text-left text-sm font-medium text-gray-900" colspan="4" scope="colgroup">Fonctionnalités</th>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Accès à la <a href="{{route('login')}}">plateforme MY</a></th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Gestion de la page entreprise</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Gestion des utilisateurs</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Export/Import des utilisateurs</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Not included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Export des plaintes.</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Not included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Export des sanctions</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Not included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="bg-gray-50 py-3 pl-6 text-left text-sm font-medium text-gray-900" colspan="4" scope="colgroup">Reporting</th>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Tableau de bord simple</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Tableau de bord avancé</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Not included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Not included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="bg-gray-50 py-3 pl-6 text-left text-sm font-medium text-gray-900" colspan="4" scope="colgroup">Support</th>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Accès support / ticket</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Temps de réponse</th>

                    <td class="py-5 px-6">
                        <span class="block text-sm text-gray-700">72 heures - 5/7j</span>
                    </td>
                    <td class="py-5 px-6">
                        <span class="block text-sm text-gray-700">48 heures - 6/7j</span>
                    </td>
                    <td class="py-5 px-6">
                        <span class="block text-sm text-gray-700">24 heures - 7/7j</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Formation à la prise en main</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Not included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="bg-gray-50 py-3 pl-6 text-left text-sm font-medium text-gray-900" colspan="4" scope="colgroup">Notifications</th>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Email à la réception d'une plainte</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Email à la réception d'une sanction</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Newsletter</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>

                <tr>
                    <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Email de reporting global</th>

                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Not included in Basic</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Not included in Essential</span>
                    </td>
                    <td class="py-5 px-6">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Included in Premium</span>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr class="border-t border-gray-200">
                    <th class="sr-only" scope="row">Choose your plan</th>

                    <td class="px-6 pt-5">
{{--                        <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Souscrire à l'abonnement Essentiel</a>--}}
                        <a class="block w-full rounded-md border border-transparent bg-gray-400 py-2 text-center text-sm font-semibold text-white shadow">Souscrire à l'abonnement Essentiel</a>
                    </td>

                    <td class="px-6 pt-5">
{{--                        <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Souscrire à l'abonnement Professionnel</a>--}}
                        <a class="block w-full rounded-md border border-transparent bg-gray-400 py-2 text-center text-sm font-semibold text-white shadow">Souscrire à l'abonnement Professionnel</a>
                    </td>

                    <td class="px-6 pt-5">
{{--                        <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Souscrire à l'abonnement Entreprise</a>--}}
                        <a class="block w-full rounded-md border border-transparent bg-gray-400 py-2 text-center text-sm font-semibold text-white shadow">Souscrire à l'abonnement Entreprise</a>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

        @include('pages.No.mobile_price')

    </div>
  </div>
@endsection
