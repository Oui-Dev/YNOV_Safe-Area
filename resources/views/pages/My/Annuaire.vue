<template>
    <dashboardVue>
        <div class="px-4 mt-3 sm:px-6 lg:px-8">
            <Link :href="route('my.auth.users.create')" class="float-right items-center rounded-md border border-transparent bg-safearea-blue px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">Ajouter un utilisateur</Link>
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Utilisateurs</h1>
                </div>
                <div class="sm:mt-0 sm:ml-16 sm:flex-none">
                    <button v-if="isAdmin()" type="button"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Ajouter un utilisateur</button>
                </div>
            </div>
            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                            Prénom</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Nom</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Email</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Téléphone</th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr v-for="(person, personIdx) in people.data" :key="person.id"
                                        :class="personIdx % 2 === 0 ? undefined : 'bg-gray-50'">
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            {{ person.firstname }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ person.lastname
                                        }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                                person.professional_email
                                        }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ person.phone }}
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <Link v-if="true" :href="route('my.auth.users.edit', {reference: person.reference})" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                    class="sr-only">, {{ person.name }}</span></Link>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Pagination class="pt-5 border-t border-gray-200 flex items-center justify-center" :paginator="people" />
    </dashboardVue>

</template>
  

<script setup>
import { ref } from '@vue/reactivity';
import DashboardLayout from "../../layouts/dashboard.vue";

import { createApp } from 'vue';
import dashboardVue from '../../layouts/dashboard.vue';
import Pagination from '../../components/dashboard/pagination.vue';
import { Link } from '@inertiajs/inertia-vue3';

const app = createApp({})

const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
    auth: {
        type: Object,
        required: true,
    }
});

const isAdmin = () => {
    return props.auth.user.permissions.some((e) => e.name === 'admin_access');
}

app.component('dashboardVue', dashboardVue);
app.component('Pagination', Pagination);
app.component('Link', Link);


const people = props.users;


</script>