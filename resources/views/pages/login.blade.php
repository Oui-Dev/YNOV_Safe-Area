@extends('layouts/no')

@section('content')
    <section id="login">
        <div class="flex min-h-full max-h">
            <div class="flex flex-1 flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
                <div class="mx-auto w-full max-w-sm lg:w-96">
                    <div>
                        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Connexion</h2>
                    </div>

                    <div class="mt-8">
                        <div class="mt-6">
                            <x-form action="#" method="POST" class="space-y-6">
                                <div>
                                    <label for="identifiant"
                                        class="block text-sm font-medium text-gray-700">Identifiant</label>
                                    <div class="mt-1">
                                        <input id="identifiant" name="identifiant" autocomplete="identifiant" required=""
                                            class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                                    </div>
                                </div>

                                <div class="space-y-1">
                                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de
                                        passe</label>
                                    <div class="mt-1">
                                        <input id="password" name="password" type="password"
                                            autocomplete="current-password" required=""
                                            class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <input id="remember-me" name="remember-me" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300" />
                                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">Se souvenir de moi
                                            ?</label>
                                    </div>

                                    <div class="text-sm">
                                        <a href="#" class="font-medium text-safearea-blue">Mot de passe oublié ?</a>
                                    </div>
                                </div>

                                <div>
                                    <button type="submit"
                                        class="flex w-full justify-center rounded-md border border-transparent bg-safearea-blue py-2 px-4 text-sm font-medium text-white shadow-sm">Connexion</button>
                                </div>

                                <div class="mt-4 text-safearea-red">
                                    @foreach ($errors->all() as $error)
                                        <span>{{ $error }}</span>
                                    @endforeach
                                </div>
                            </x-form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative hidden flex-1 lg:block z-10">
                <img class="absolute inset-0 h-full w-full object-cover"
                    src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80"
                    alt="" />
            </div>
        </div>
    </section>
@endsection
