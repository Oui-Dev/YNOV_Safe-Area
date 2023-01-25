<template>
    <dashboardVue>
        <div class="px-4 mt-3 sm:px-6 lg:px-8">
            <Link :href="route('console.auth.companies.create')"
                class="float-right items-center rounded-md border border-transparent bg-safearea-blue px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
            Ajouter une entreprise</Link>
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Entreprises</h1>
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
                                            class="py-3.5 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Nom</th>
                                        <th scope="col"
                                            class="py-3.5 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Adresse</th>
                                        <th scope="col"
                                            class="py-3.5 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Ville</th>
                                        <th scope="col"
                                            class="py-3.5 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Siret</th>
                                        <th scope="col"
                                            class="py-3.5 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Siren</th>
                                        <th scope="col"
                                            class="py-3.5 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Téléphone
                                        </th>
                                        <th scope="col"
                                            class="py-3.5 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                            Email
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr v-for="(company, companyIdx) in companies.data" :key="companies.id"
                                        :class="companyIdx % 2 === 0 ? undefined : 'bg-gray-50'">
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ company.name }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ company.address_id }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ company.city_id }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ company.siret }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ company.siren }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ company.phone }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ company.email }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Pagination class="pt-5 border-t border-gray-200 flex items-center justify-center" :paginator="companies" />
    </dashboardVue>
</template>


<script setup>
import dashboardVue from '../../../layouts/dashboard.vue';
import Pagination from '../../../components/dashboard/Pagination.vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    companies: {
        type: Array,
        required: true
    }
});


</script>