<script setup>
import DashboardLayout from '../../../layouts/dashboard.vue';
import Table from '../../../components/dashboard/Table.vue';
import { TrashIcon,PencilIcon, PlusIcon } from "@heroicons/vue/24/outline";
import { Link, usePage } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import { computed } from 'vue';

// const currentuser = computed(() => usePage().props.value.auth.user);
const props = defineProps({
    complains: {
        type: Object,
        required: true,
    }
});

const isAdmin = computed(() => usePage().props.value.auth.user.roles.some((e) => e === 'admin'));
const isUser = computed(() => usePage().props.value.auth.user.roles.some((e) => e === 'my'));

const getUser = (complain) => {
	if(!complain.user) return "Anonyme";
	return complain.user.lastname + " " + complain.user.firstname;
};

const getTitle = (complain) => {
	const strLength = 30;
	return complain.title.substring(0, strLength) + (complain.title.length > strLength ? "..." : "");
};

function deleteUser(complain) {
    Inertia.put(route('my.auth.complains.delete', {id: complain.id}), {}, {
        onBefore: () => {
            return confirm('Êtes-vous sûr de vouloir supprimer cette plainte ?');
        }
    });
}

const getAssignedUser = (complain) => {
    return complain.assigned_user
        ? complain.assigned_user.firstname + " " + complain.assigned_user.lastname
        : 'Not assigned';
}

function getEmergency(complain) {
	switch (complain.urgency) {
		case '0':
			return "<div class='h-4 w-4 rounded-full mx-auto bg-green-600' />";
		case '1':
			return "<div class='h-4 w-4 rounded-full mx-auto bg-yellow-600' />";
		case '2':
			return "<div class='h-4 w-4 rounded-full mx-auto bg-red-600' />";
		default:
			return "<div class='h-4 w-4 rounded-full mx-auto bg-green-600' />";
	}
}

function getStatus(complain) {
	return "<div class='h-4 w-4 rounded-full mx-auto " + complain.status.color + " ' title=' " + complain.status.name + "' />";
}
</script>

<template>
    <DashboardLayout>
		<div class="flex flex-col sm:flex-row justify-between items-center gap-4">
			<h1 class="text-xl font-bold text-gray-900">Plaintes</h1>
			<Link v-if="isUser" :href="route('my.auth.complains.create')"
				class="flex justify-center rounded-md bg-safearea-blue px-3 py-1 text-white shadow-sm hover:bg-indigo-700 gap-2"
			>
				<PlusIcon class="h-6 w-6 mx-auto"></PlusIcon>
				<span>Déposer une plainte</span>
			</Link>
		</div>


		<!-- display admin -->
        <Table v-if="isAdmin"
			:tableTitles="['Dépositaire' , 'Titre', 'Assignée à', 'Urgence', 'Status']"
			:tableKeys="[{function: getUser}, {function: getTitle}, {function: getAssignedUser}, {function: getEmergency}, {function: getStatus}]"
			:data="complains"
			:actions="[
				{ type: 'Link', as: 'a', method: 'GET', routeName: 'my.auth.complains.edit', param: 'id', icon: PencilIcon, iconText: 'Détails'},
			]"
            :pagination=true
		/>
		<!-- display user -->
		<Table v-if="isUser"
            :tableTitles="['Titre', 'Assignée à', 'Status']"
            :tableKeys="[{function: getTitle}, {function: getAssignedUser}, {function: getStatus}]"
            :data="complains"
            :actions="[
                { type: 'Link', as: 'a', method: 'GET', routeName: 'my.auth.complains.list', param: 'id', icon: PencilIcon, iconText: 'Détails'},
				{ type: 'function', function: deleteUser, icon: TrashIcon, iconText: 'Supprimer' },
            ]"
            :pagination=true
        />
    </DashboardLayout>
</template>
