<script setup>
import {PencilSquareIcon, PlusIcon } from "@heroicons/vue/24/outline";
import { Link } from '@inertiajs/inertia-vue3';
import Table from '../../../components/dashboard/Table.vue';
import DashboardLayout from '../../../layouts/dashboard.vue';

const props = defineProps({
    versions: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <DashboardLayout>
		<div class="flex flex-col sm:flex-row justify-between items-center gap-4">
			<h1 class="text-xl font-bold text-gray-900">Versions</h1>
			<Link :href="route('console.auth.changelog.create')"
				class="flex justify-center rounded-md bg-safearea-blue px-3 py-1 text-white shadow-sm hover:bg-indigo-700 gap-2"
			>
				<PlusIcon class="h-6 w-6 mx-auto"></PlusIcon>
				<span>Ajouter une version</span>
			</Link>
		</div>

        <Table 
            :tableTitles="['Nom', 'Generation', 'Correction', 'Revision', 'Changelog']"
            :tableKeys="['name', 'generation', 'correction', 'revision', 'changelog']"
            :data="versions"
            :actions="[
                {type: 'Link', as: 'a', method: 'GET', routeName: 'console.auth.changelog.edit', param: 'id', icon: PencilSquareIcon, iconText: 'Modifier'},
            ]"
            :pagination=true
        />
    </DashboardLayout>
</template>


