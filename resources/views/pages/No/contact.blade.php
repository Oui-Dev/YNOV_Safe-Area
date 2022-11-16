@extends('layouts/no')
@section('title', '- Nous contacter')
@section('content')
<div class="bg-white mb-14">
      <!-- Header -->
      <div>
        <div class="py-6 lg:py-10">
          <div class="relative mx-auto max-w-7xl pl-4 pr-8 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">Nous contacter</h1>
            <p class="mt-6 max-w-3xl text-xl">
                Retrouvez toutes nos coordonnées pour nous contacter.
            </p>
          </div>
        </div>
      </div>

      <!-- Contact section -->
      <section class="relative bg-white rounded-lg" aria-labelledby="contact-heading">
        <div class="absolute h-1/2 w-full" aria-hidden="true"></div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="relative bg-gray-50 rounded-lg shadow-xl">
            <h2 id="contact-heading" class="sr-only">Contact us</h2>

            <div class="grid grid-cols-1 lg:grid-cols-3">
              <!-- Contact information -->
              <div class="relative overflow-hidden bg-gradient-to-b py-10 px-6 sm:px-10 xl:p-12 from-safearea-red to-safearea-blue rounded-lg">
                <!-- Decorative angle backgrounds -->
                <div class="pointer-events-none absolute inset-0 sm:hidden" aria-hidden="true">
                  <svg class="absolute inset-0 h-full w-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                    <defs>
                      <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#fff"></stop>
                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
                <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 sm:block lg:hidden" aria-hidden="true">
                  <svg class="absolute inset-0 h-full w-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                    <defs>
                      <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#fff"></stop>
                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
                <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 lg:block" aria-hidden="true">
                  <svg class="absolute inset-0 h-full w-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                    <defs>
                      <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#fff"></stop>
                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
                <h3 class="text-lg font-medium text-white">Informations</h3>
                <p class="mt-6 max-w-3xl text-base text-white">
                    Toutes les informations nécessaires pour nous contacter sur Twitter, Linkedin, par e-mail et via notre formulaire de contact.
                </p>
                <dl class="mt-8 space-y-6 text-white">
                  <dt><span class="sr-only">Email</span></dt>
                  <dd class="flex text-base text-white">
                    <!-- Heroicon name: outline/envelope -->
                    <svg class="h-6 w-6 flex-shrink-0 text-teal-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <span class="ml-3"><a href="mailto:safearea.app@gmail.com">safearea.app@gmail.com</a></span>
                  </dd>
                </dl>
                <ul role="list" class="mt-8 flex space-x-12">
                  <li>
                    <a class="text-teal-200 hover:text-teal-100" target="_blank" href="https://www.linkedin.com/company/safe-area-app/">
                      <span class="sr-only">Linkedin</span>
                        <img src="{{Vite::asset('resources/images/linkedin.webp')}}" alt="Logo linkedin" style="width: 40px">
                    </a>
                  </li>
                  <li>
                    <a class="text-teal-200 hover:text-teal-100" target="_blank" href="https://twitter.com/SafeAreaOff">
                      <span class="sr-only">Twitter</span>
                        <img src="{{Vite::asset('resources/images/twitter.svg')}}" alt="Logo linkedin" style="width: 40px">

                    </a>
                  </li>
                </ul>
              </div>

              <!-- Contact form -->
              <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                <h3 class="text-lg font-medium">Nous envoyer un message</h3>
                <x-form action="{{route('no.public.contact.store')}}" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                  <div>
                    <label for="firstname" class="block text-sm font-medium">Prénom</label>
                    <div class="mt-1">
                      <input type="text" name="firstname" id="firstname" required autocomplete="given-name" class="block w-full rounded-md py-3 px-4 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                    </div>
                  </div>
                  <div>
                    <label for="lastname" class="block text-sm font-medium">Nom</label>
                    <div class="mt-1">
                      <input type="text" name="lastname" id="lastname" required autocomplete="family-name" class="block w-full rounded-md py-3 px-4 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                    </div>
                  </div>
                  <div>
                    <label for="email" class="block text-sm font-medium">Adresse email</label>
                    <div class="mt-1">
                      <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md py-3 px-4 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                    </div>
                  </div>
                  <div>
                    <div class="flex justify-between">
                      <label for="phone" class="block text-sm font-medium">Numéro de téléphone</label>
                    </div>
                    <div class="mt-1">
                      <input type="text" name="phone" id="phone" required autocomplete="tel" class="block w-full rounded-md py-3 px-4 shadow-sm focus:border-teal-500 focus:ring-teal-500" aria-describedby="phone-optional">
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="subject" class="block text-sm font-medium">Sujet de votre message</label>
                    <div class="mt-1">
                      <input type="text" name="subject" id="subject" required class="block w-full rounded-md py-3 px-4 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <div class="flex justify-between">
                      <label for="message" class="block text-sm font-medium">Votre message</label>
                      <span id="message-max" class="text-sm">Max. 500 characters</span>
                    </div>
                    <div class="mt-1">
                      <textarea id="message" name="message" required rows="4" class="block w-full rounded-md py-3 px-4 shadow-sm focus:border-teal-500 focus:ring-teal-500" aria-describedby="message-max"></textarea>
                    </div>
                  </div>
                  <div class="sm:col-span-2 sm:flex sm:justify-end">
                    <button type="submit" class="mt-2 bg-gradient-to-r from-safearea-red to-safearea-blue  inline-flex w-full items-center justify-center rounded-md border border-transparent bg-teal-500 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:w-auto">Valider le formulaire</button>
                  </div>
                </x-form>
                  <p class="mt-4 text-base text-green-500">{{ Session::get('contactform.success') }}</p>
                  <p class="mt-4 text-base text-red-600">{{ Session::get('contactform.error') }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
@endsection
