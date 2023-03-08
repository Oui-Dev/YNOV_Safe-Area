<script setup>
import { TrashIcon, PencilSquareIcon, PlusIcon } from "@heroicons/vue/24/outline";
import { Link } from '@inertiajs/inertia-vue3';
import Table from '../../../components/dashboard/Table.vue';
import DashboardLayout from '../../../layouts/dashboard.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    companies: {
        type: Object,
        required: true
    }
});

function deleteCompany(company) {
    Inertia.delete(route('console.auth.companies.delete', { reference: company.reference }), {
        onBefore: () => {
            return confirm('Êtes-vous sûr de vouloir supprimer cette entreprise ?');
        },
        onSuccess: () => {
            Inertia.reload({ only: ['companies'] });
        }
    });
}
</script>

<template>
    <DashboardLayout>
		<div class="flex flex-col sm:flex-row justify-between items-center gap-4">
			<h1 class="text-xl font-bold text-gray-900">Entreprises</h1>
			<Link :href="route('console.auth.companies.create')"
				class="flex justify-center rounded-md bg-safearea-blue px-3 py-1 text-white shadow-sm hover:bg-indigo-700 gap-2"
			>
				<PlusIcon class="h-6 w-6 mx-auto"></PlusIcon>
				<span>Ajouter une entreprise</span>
			</Link>
		</div>

        <Table 
            :tableTitles="['Nom', 'Ville', 'Téléphone', 'Email']"
            :tableKeys="['name', 'city', 'phone', 'email']"
            :data="companies"
            :actions="[
                // TODO: view more btn
                {type: 'Link', as: 'a', method: 'GET', routeName: 'console.auth.companies.edit', param: 'id', icon: PencilSquareIcon, iconText: 'Modifier'},
                {type: 'function', function: deleteCompany, icon: TrashIcon, iconText: 'Supprimer' }
            ]"
            :pagination=true
        />
    </DashboardLayout>
</template>


