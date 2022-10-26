@extends('layouts/no')

@section('content')
<div class="bg-white mt-8">
    <!-- Comparison table -->
    <div class="mx-auto max-w-2xl bg-white py-8 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8">
      <!-- xs to lg -->
      <div class="space-y-24 lg:hidden">
        <section>
          <div class="mb-8 px-4 text-center md:text-left">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Plan TPE</h2>
            <p class="mt-4">
              <span class="text-4xl font-bold tracking-tight text-gray-900">19 €</span>
              <span class="text-base font-medium text-gray-500">/mois</span>
            </p>
            <p class="mt-4 text-sm text-gray-500">Utile pour les TPE jusqu'à 9 utilisateurs</p>
          </div>

          <table class="w-full">
            <caption class="border-t border-gray-200 bg-gray-50 py-3 px-4 text-left text-sm font-medium text-gray-900">
              Fonctionnalités
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Fonctionnalités</th>
                <th class="sr-only" scope="col">Incluses</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Molestie lobortis massa.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Urna purus felis.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Tellus pulvinar sit dictum.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                  <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Nombre d'utilisateurs</th>
                  <td class="py-5 pr-4">
                      <span class="block text-right text-sm text-gray-700">Jusqu'à 9 collaborateurs</span>
                  </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="border-t border-gray-200 bg-gray-50 py-3 px-4 text-left text-sm font-medium text-gray-900">
              Reporting
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Adipiscing.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Eget risus integer.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Gravida leo urna velit.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="border-t border-gray-200 bg-gray-50 py-3 px-4 text-left text-sm font-medium text-gray-900">
              Support
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Sit dignissim.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Congue at nibh et.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Volutpat feugiat mattis.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Tristique pellentesque ornare diam sapien.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="border-t border-gray-200 px-4 pt-5">
            <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Souscrire à l'abonnement</a>
          </div>
        </section>

        <section>
          <div class="mb-8 px-4 text-center md:text-left">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Plan PME</h2>
            <p class="mt-4">
              <span class="text-4xl font-bold tracking-tight text-gray-900">39 €</span>
              <span class="text-base font-medium text-gray-500">/mois</span>
            </p>
            <p class="mt-4 text-sm text-gray-500">Idéale pour les entreprises de 10 à 70 collaborateurs</p>
          </div>

          <table class="w-full">
            <caption class="border-t border-gray-200 bg-gray-50 py-3 px-4 text-left text-sm font-medium text-gray-900">
              Features
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Molestie lobortis massa.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Urna purus felis.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Tellus pulvinar sit dictum.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Nombre d'utilisateurs</th>
                <td class="py-5 pr-4">
                  <span class="block text-right text-sm text-gray-700">De 10 à 70 collaborateurs</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="border-t border-gray-200 bg-gray-50 py-3 px-4 text-left text-sm font-medium text-gray-900">
              Reporting
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Adipiscing.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Eget risus integer.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Gravida leo urna velit.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="border-t border-gray-200 bg-gray-50 py-3 px-4 text-left text-sm font-medium text-gray-900">
              Support
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Sit dignissim.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Congue at nibh et.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Volutpat feugiat mattis.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Tristique pellentesque ornare diam sapien.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="border-t border-gray-200 px-4 pt-5">
            <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Souscrire à l'abonnement</a>
          </div>
        </section>

        <section>
          <div class="mb-8 px-4 text-center md:text-left">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Plan GE</h2>
            <p class="mt-4">
              <span class="text-4xl font-bold tracking-tight text-gray-900">59 €</span>
              <span class="text-base font-medium text-gray-500">/mois</span>
            </p>
            <p class="mt-4 text-sm text-gray-500">Pour les grandes entreprises jusq'à 240 collaborateurs</p>
          </div>

          <table class="w-full">
            <caption class="border-t border-gray-200 bg-gray-50 py-3 px-4 text-left text-sm font-medium text-gray-900">
              Features
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Molestie lobortis massa.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Urna purus felis.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Tellus pulvinar sit dictum.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Nombre d'utilisateurs</th>
                <td class="py-5 pr-4">
                  <span class="block text-right text-sm text-gray-700">De 71 à 240 collabborateurs</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="border-t border-gray-200 bg-gray-50 py-3 px-4 text-left text-sm font-medium text-gray-900">
              Reporting
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Adipiscing.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Eget risus integer.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Gravida leo urna velit.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="border-t border-gray-200 bg-gray-50 py-3 px-4 text-left text-sm font-medium text-gray-900">
              Support
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Sit dignissim.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Congue at nibh et.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Volutpat feugiat mattis.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Tristique pellentesque ornare diam sapien.</th>
                <td class="py-5 pr-4">
                  <!-- Heroicon name: mini/check -->
                  <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="border-t border-gray-200 px-4 pt-5">
            <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Souscrire à l'abonnement</a>
          </div>
        </section>
      </div>

        @include('pages.No.mobile.price')

    </div>
  </div>
@endsection
