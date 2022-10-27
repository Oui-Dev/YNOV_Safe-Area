@include('components.header')

<section class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="min-h-screen">
        <div>
            <div class="h-12"></div>
            <div class="sm:mx-auto sm:max-w pt-16">
                <h1 class="mt-6 text-center text-4xl font-bold text-gray-900 sm:text-5xl">Le site est actuellement en maintenance</h1>
                <h1 class="text-center text-lg">Nous faisons tout notre possible pour qu'il soit a nouveau disponible</h1>
            </div>
            <div class="mx-auto max-w-sm sm:flex sm:max-w-none sm:justify-center">
                <div class="mt-10 flex space-x-10 sm:border-l sm:border-transparent sm:pl-6">
                    <a href="{{route('no.public.homepage')}}" class="inline-flex rounded-md border border-transparent px-4 py-3 text-base font-medium shadow-sm sm:px-8 bg-gradient-to-r text-white from-safearea-red to-safearea-blue">retour</a>
                    <a href="mailto:safearea.app@gmail.com" class="inline-flex rounded-md border border-transparent px-4 py-3 text-base font-medium shadow-sm sm:px-8 bg-gradient-to-r text-white from-safearea-red to-safearea-blue">contacter</a>
                </div>
            </div>
        </div>
        @include('components.footer')
    </div>
</section>

