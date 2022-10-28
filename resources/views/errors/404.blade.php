@include('components.header')

<section class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="min-h-screen">
        <div>
            <div class="h-12"></div>
            <div class="min-h-full bg-white px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
                <div class="mx-auto max-w-max">
                    <main class="sm:flex">
                        <p class="text-4xl font-bold tracking-tight text-safearea-blue sm:text-5xl pr-4">404</p>
                        <div class="sm:ml-6">
                            <div class="sm:border-l sm:border-gray-200 sm:pl-6">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page introuvable</h1>
                                <p class="mt-3 text-base text-gray-500">La page que vous tentez d'afficher n'existe pas</p>
                            </div>
                            <div class="mt-10 flex space-x-10 sm:border-l sm:border-transparent sm:pl-6">
                                <a href="{{route('no.public.homepage')}}" class="inline-flex items-center rounded-md border border-transparent bg-gradient-to-r text-white from-safearea-red to-safearea-blue px-4 py-2 text-sm font-medium text-white">Retour</a>
                                <a href="mailto:safearea.app@gmail.com" class="inline-flex items-center rounded-md border border-transparent px-4 py-2 text-sm font-medium bg-gradient-to-r text-white from-safearea-red to-safearea-blue">Nous contacter</a>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
        @include('components.footer')
    </div>
</section>

