<footer class="bg-gray-50 sticky top-full" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-4 pt-12 pb-8 sm:px-6 lg:px-8 lg:pt-16">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8 text-center lg:text-left">
                    <div>
                        <h3 class="text-base font-medium text-gray-900">Solutions</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Marketing</a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Analytics</a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Commerce</a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Insights</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-base font-medium text-gray-900">Support</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Pricing</a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Documentation</a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Guides</a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">API Status</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8 text-center lg:text-left">
                    <div>
                        <h3 class="text-base font-medium text-gray-900">Company</h3>
                        <ul role="list" class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">About</a>
                        </li>

                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Blog</a>
                        </li>

                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Jobs</a>
                        </li>

                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Press</a>
                        </li>

                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Partners</a>
                        </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-base font-medium text-gray-900">Legal</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Claim</a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Privacy</a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-12 xl:mt-0 text-center lg:text-left">
                <h3 class="text-base font-medium text-gray-900">Utilisez notre newsletter</h3>
                <p class="mt-4 text-base text-gray-500">Recevez nos dernières nouveautés, nos bilans et des conseils pour mieux protégrer l'environnement de vos collaborateurs</p>
                <x-form class="mt-4 sm:flex sm:max-w-md mx-auto lg:mx-0" method="POST" action="{{route('no.public.newsletters.store')}}">
                    <label for="email" class="sr-only">Adresse email</label>
                    <input type="email" name="email" id="email" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:placeholder-gray-400 focus:outline-none focus:ring-indigo-500 text-center lg:text-left" placeholder="Votre adresse e-mail">
                    <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue bg-origin-border px-4 py-3 text-base font-medium text-white shadow-sm hover:from-safearea-red hover:to-safearea-blue">S'inscrire</button>
                    </div>
                </x-form>
                <p class="mt-4 text-base text-green-500">{{ Session::get('newsletter.success') }}</p>
                <p class="mt-4 text-base text-red-600">{{ Session::get('newsletter.error') }}</p>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-16">
            <div class="flex space-x-6 md:order-2">
                <a href="https://www.linkedin.com/company/safe-area-app/" target="_blank" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Linkedin</span>
                    <svg class="h-6 w-6" fill="currentColor" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path
                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                        ></path>
                    </svg>
                </a>

                <a href="https://twitter.com/SafeAreaOff" target="_blank" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-base text-gray-400 md:order-1 md:mt-0">&copy; 2022 Safe Area. Tous droits réservés.</p>
            <p class="mt-8 text-base text-gray-400 md:order-1 md:mt-0"><a  target="_blank" href="{{route('no.public.changelog')}}">
                {{$version->name}} ({{$version->generation}}.{{$version->revision}}.{{$version->correction}})
                {{Carbon\Carbon::parse($version->updated_at)->format('d/m/Y')}}</a>
            </p>
        </div>
    </div>
</footer>
