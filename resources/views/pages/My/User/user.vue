<template>
    <form @submit.prevent="submit" class="h-auto w-auto m-auto flex flex-col justify-center items-center">
        <h1 class="text-safearea-grey text-right m-6">Mon Profil</h1>

        <div class="md:flex items-stretch m-6">
            <a href="#">
            <span class="inline-block h-20 w-20 overflow-hidden rounded-full bg-gray-100">
                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </span>
            </a>
        </div>

<div class="m-0.5 md:flex items-stretch m-6">
        <div class="m-4">
            <label for="name" class="ml-px block pl-4 text-sm font-medium text-gray-700">Nom</label>
            <div class="m-1">
                <input type="text" name="lastname" id="lastname" class="block w-full rounded-full border-gray-300 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Smith" />
            </div>
        </div>


        <div class="m-4">
            <label for="name" class="ml-px block pl-4 text-sm font-medium text-gray-700">Prénom</label>
            <div class="m-1">
                <input type="text" name="firstname" id="firstname" class="block w-full rounded-full border-gray-300 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Jane" />
            </div>
        </div>
</div>


        <div class="m-0.5 md:flex items-stretch m-6">
        <div class="m-4">
            <div class="relative m-1 rounded-md shadow-sm my-1">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <EnvelopeIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                </div>
                <input type="email" name="email" id="email" class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com" />
            </div>
        </div>

        <div class="m-4">
            <div class="relative m-1 rounded-md shadow-sm my-1">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <EnvelopeIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                </div>
                <input type="email" name="email" id="email" class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com" />
            </div>
        </div>
        </div>

        <div class="m-0.5 md:flex items-stretch m-6">
            <div class="m-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <div class="m-1">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                </div>
            </div>

            <div class="m-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Confirmation Mot de passe</label>
                <div class="m-1">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                </div>
            </div>
        </div>

        <button class="bg-safearea-red hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full m-4">
            Enregistrer les informations
        </button>
    </form>


</template>

<script>
import DashboardLayout from "../../../layouts/dashboard.vue";

export default {
    name: "UserIndex",
    layout: DashboardLayout,
};
</script>

<script setup>
import { EnvelopeIcon } from '@heroicons/vue/20/solid'
</script>

<style lang="scss" scoped>
</style>
