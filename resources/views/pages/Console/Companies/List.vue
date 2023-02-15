<script setup>
import { TrashIcon, PencilSquareIcon, PlusIcon } from "@heroicons/vue/24/outline";
import { Link } from '@inertiajs/inertia-vue3';
import Table from '../../../components/dashboard/Table.vue';
import DashboardLayout from '../../../layouts/dashboard.vue';

const props = defineProps({
    companies: {
        type: Array,
        required: true
    }
});


</script>

<template>
    <DashboardLayout>
        <div class="px-4 mt-3 sm:px-6 lg:px-8">
            <Link :href="route('console.auth.companies.create')"
                class="float-right items-center rounded-md border border-transparent bg-safearea-blue px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
            Ajouter une entreprise</Link>
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Entreprises</h1>
                </div>
            </div>

            <Table 
                :tableTitles="['Nom', 'Adresse',  'Siret', 'Siren', 'Téléphone', 'Email']"
                :tableKeys="['name', 'address_id', 'siret', 'siren', 'phone', 'email']"
                :data="companies"
                :actions="[
                    {type : 'Link', as: 'a', method: 'GET', routeName: 'console.auth.companies.edit', param: 'reference', icon: PencilSquareIcon, iconText: 'Modifier'}
                ]"
                :pagination=true
            />

        </div>
    </DashboardLayout>
</template>


