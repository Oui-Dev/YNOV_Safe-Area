@extends('layouts/no')

@section('content')
<div class="bg-white">
    <!-- Comparison table -->
    <div class="mx-auto max-w-2xl bg-white py-8 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8">
      <!-- xs to lg -->
      <div class="space-y-24 lg:hidden">
        <section>
          <div class="mb-8 px-4 text-center md:text-left">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Basic</h2>
            <p class="mt-4">
              <span class="text-4xl font-bold tracking-tight text-gray-900">$9</span>
              <span class="text-base font-medium text-gray-500">/mo</span>
            </p>
            <p class="mt-4 text-sm text-gray-500">Quis suspendisse ut fermentum neque vivamus non tellus.</p>
            <a href="#" class="mt-6 block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Basic</a>
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
                  <!-- Heroicon name: mini/minus -->
                  <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">No</span>
                </td>
              </tr>
  
              <tr class="border-t border-gray-200">
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Convallis.</th>
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
            <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Basic</a>
          </div>
        </section>
  
        <section>
          <div class="mb-8 px-4 text-center md:text-left">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Essential</h2>
            <p class="mt-4">
              <span class="text-4xl font-bold tracking-tight text-gray-900">$29</span>
              <span class="text-base font-medium text-gray-500">/mo</span>
            </p>
            <p class="mt-4 text-sm text-gray-500">Quis eleifend a tincidunt pellentesque. A tempor in sed.</p>
            <a href="#" class="mt-6 block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Essential</a>
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
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Convallis.</th>
                <td class="py-5 pr-4">
                  <span class="block text-right text-sm text-gray-700">Up to 20 users</span>
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
            <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Essential</a>
          </div>
        </section>
  
        <section>
          <div class="mb-8 px-4 text-center md:text-left">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Premium</h2>
            <p class="mt-4">
              <span class="text-4xl font-bold tracking-tight text-gray-900">$59</span>
              <span class="text-base font-medium text-gray-500">/mo</span>
            </p>
            <p class="mt-4 text-sm text-gray-500">Orci volutpat ut sed sed neque, dui eget. Quis tristique non.</p>
            <a href="#" class="mt-6 block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Premium</a>
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
                <th class="py-5 px-4 text-left text-sm font-normal text-gray-500" scope="row">Convallis.</th>
                <td class="py-5 pr-4">
                  <span class="block text-right text-sm text-gray-700">Up to 50 users</span>
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
            <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Premium</a>
          </div>
        </section>
      </div>
  
      <!-- lg+ -->
      <div class="hidden lg:block">
        <table class="h-px w-full table-fixed">
          <caption class="sr-only">
            Pricing plan comparison
          </caption>
          <thead>
            <tr>
              <th class="pb-4 pl-6 pr-6 text-left text-sm font-medium text-gray-900" scope="col">
                <span class="sr-only">Feature by</span>
                <span>Plans</span>
              </th>
  
              <th class="w-1/4 px-6 pb-4 text-left text-lg font-medium leading-6 text-gray-900" scope="col">Basic</th>
  
              <th class="w-1/4 px-6 pb-4 text-left text-lg font-medium leading-6 text-gray-900" scope="col">Essential</th>
  
              <th class="w-1/4 px-6 pb-4 text-left text-lg font-medium leading-6 text-gray-900" scope="col">Premium</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 border-t border-gray-200">
            <tr>
              <th class="py-8 pl-6 pr-6 text-left align-top text-sm font-medium text-gray-900" scope="row">Pricing</th>
  
              <td class="h-full py-8 px-6 align-top">
                <div class="flex h-full flex-col justify-between">
                  <div>
                    <p>
                      <span class="text-4xl font-bold tracking-tight text-gray-900">$9</span>
                      <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Quis suspendisse ut fermentum neque vivamus non tellus.</p>
                  </div>
                  <a href="#" class="mt-6 block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Basic</a>
                </div>
              </td>
  
              <td class="h-full py-8 px-6 align-top">
                <div class="flex h-full flex-col justify-between">
                  <div>
                    <p>
                      <span class="text-4xl font-bold tracking-tight text-gray-900">$29</span>
                      <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Quis eleifend a tincidunt pellentesque. A tempor in sed.</p>
                  </div>
                  <a href="#" class="mt-6 block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Essential</a>
                </div>
              </td>
  
              <td class="h-full py-8 px-6 align-top">
                <div class="flex h-full flex-col justify-between">
                  <div>
                    <p>
                      <span class="text-4xl font-bold tracking-tight text-gray-900">$59</span>
                      <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Orci volutpat ut sed sed neque, dui eget. Quis tristique non.</p>
                  </div>
                  <a href="#" class="mt-6 block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Premium</a>
                </div>
              </td>
            </tr>
  
            <tr>
              <th class="bg-gray-50 py-3 pl-6 text-left text-sm font-medium text-gray-900" colspan="4" scope="colgroup">Features</th>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Molestie lobortis massa.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Premium</span>
              </td>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Urna purus felis.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Premium</span>
              </td>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Tellus pulvinar sit dictum.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Premium</span>
              </td>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Convallis.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <span class="block text-sm text-gray-700">Up to 20 users</span>
              </td>
  
              <td class="py-5 px-6">
                <span class="block text-sm text-gray-700">Up to 50 users</span>
              </td>
            </tr>
  
            <tr>
              <th class="bg-gray-50 py-3 pl-6 text-left text-sm font-medium text-gray-900" colspan="4" scope="colgroup">Reporting</th>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Adipiscing.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Premium</span>
              </td>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Eget risus integer.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Premium</span>
              </td>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Gravida leo urna velit.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Premium</span>
              </td>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
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
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Sit dignissim.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Premium</span>
              </td>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Congue at nibh et.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Premium</span>
              </td>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Volutpat feugiat mattis.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Included in Premium</span>
              </td>
            </tr>
  
            <tr>
              <th class="py-5 pl-6 pr-6 text-left text-sm font-normal text-gray-500" scope="row">Tristique pellentesque ornare diam sapien.</th>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Basic</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/minus -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Not included in Essential</span>
              </td>
  
              <td class="py-5 px-6">
                <!-- Heroicon name: mini/check -->
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
                <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Basic</a>
              </td>
  
              <td class="px-6 pt-5">
                <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Essential</a>
              </td>
  
              <td class="px-6 pt-5">
                <a href="#" class="block w-full rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue py-2 text-center text-sm font-semibold text-white shadow hover:to-safearea-blue">Buy Premium</a>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  
    <!-- Logo cloud -->
    <div class="mx-auto max-w-7xl border-t border-gray-200 py-12 px-4 sm:px-6 lg:py-20 lg:px-8">
      <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
          <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
        </div>
        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
          <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
        </div>
        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
          <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
        </div>
        <div class="col-span-1 flex justify-center md:col-span-3 lg:col-span-1">
          <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
        </div>
        <div class="col-span-2 flex justify-center md:col-span-3 lg:col-span-1">
          <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
        </div>
      </div>
    </div>
  
    <div class="bg-gray-50">
      <!-- FAQ -->
      <div class="mx-auto max-w-7xl py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900">Frequently asked questions</h2>
        <div class="mt-12">
          <dl class="space-y-10 md:grid md:grid-cols-2 md:grid-rows-2 md:gap-x-8 md:gap-y-12 md:space-y-0 lg:grid-cols-3">
            <div class="space-y-2">
              <dt class="text-lg font-medium leading-6 text-gray-900">What&#039;s the best thing about Switzerland?</dt>
              <dd class="text-base text-gray-500">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
            </div>
  
            <div class="space-y-2">
              <dt class="text-lg font-medium leading-6 text-gray-900">How do you make holy water?</dt>
              <dd class="text-base text-gray-500">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
            </div>
  
            <div class="space-y-2">
              <dt class="text-lg font-medium leading-6 text-gray-900">Why do you never see elephants hiding in trees?</dt>
              <dd class="text-base text-gray-500">Because they&#039;re so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
            </div>
  
            <div class="space-y-2">
              <dt class="text-lg font-medium leading-6 text-gray-900">What do you call someone with no body and no nose?</dt>
              <dd class="text-base text-gray-500">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
            </div>
  
            <div class="space-y-2">
              <dt class="text-lg font-medium leading-6 text-gray-900">Why can&#039;t you hear a pterodactyl go to the bathroom?</dt>
              <dd class="text-base text-gray-500">Because the pee is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
            </div>
  
            <div class="space-y-2">
              <dt class="text-lg font-medium leading-6 text-gray-900">Why did the invisible man turn down the job offer?</dt>
              <dd class="text-base text-gray-500">He couldn&#039;t see himself doing it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  
    <!-- Feature section with brand panel -->
    <div class="relative mb-16">
      <div class="absolute inset-0 flex flex-col" aria-hidden="true">
        <div class="flex-1 bg-gray-50"></div>
        <div class="flex-1"></div>
      </div>
      <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="overflow-hidden rounded-lg bg-gradient-to-r from-safearea-red to-safearea-blue shadow-xl lg:grid lg:grid-cols-2 lg:gap-4">
          <div class="px-6 pt-10 pb-12 sm:px-16 sm:pt-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
            <div class="lg:self-center">
              <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                <span class="block">Ready to dive in?</span>
                <span class="block text-gray-200 font-semibold">Start your free trial today.</span>
              </h2>
              <p class="mt-4 text-lg leading-6 text-white">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
              <a href="#" class="mt-8 inline-flex items-center rounded-md border border-transparent bg-white py-3 px-6 text-base font-medium text-safearea-blue shadow hover:text-safearea-red">Sign up for free</a>
            </div>
          </div>
          <div class="aspect-w-5 aspect-h-3 -mt-6 md:aspect-w-2 md:aspect-h-1">
            <img class="translate-x-6 translate-y-6 transform rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20" src="https://tailwindui.com/img/component-images/full-width-with-sidebar.jpg" alt="App screenshot">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection