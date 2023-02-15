<script setup>
import DashboardLayout from '../../../layouts/dashboard.vue';
import { ArrowTopRightOnSquareIcon } from "@heroicons/vue/24/outline";
import Table from '../../../components/dashboard/Table.vue';

// const currentuser = computed(() => usePage().props.value.auth.user);
const props = defineProps({
    complains: {
        type: Object,
        required: true,
    }
});

const getUser = (complain) => {
	return complain.user.lastname + " " + complain.user.firstname;
};

const getTitle = (complain) => {
	const strLength = 30;
	return complain.title.substring(0, strLength) + (complain.title.length > strLength ? "..." : "");
};

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
	switch (complain.status) {
		case "nouveau":
			return "<div class='h-4 w-4 rounded-full mx-auto bg-green-600' title='Nouveau' />";
		case "attribue":
			return "<div class='h-4 w-4 rounded-full mx-auto bg-blue-600' title='Attribué' />";
		case "en cours":
			return "<div class='h-4 w-4 rounded-full mx-auto bg-yellow-600' title='En cours' />";
		case "termine":
			return "<div class='h-4 w-4 rounded-full mx-auto bg-slate-600' title='Terminé' />";
		case "clos":
			return "<div class='h-4 w-4 rounded-full mx-auto bg-gray-600' title='Clos' />";
		default:
			return "<div class='h-4 w-4 rounded-full mx-auto bg-green-600' title='Nouveau' />";
	}
}
</script>

<template>
    <DashboardLayout>
		<div class="flex flex-col sm:flex-row justify-between items-center gap-4">
			<h1 class="text-xl font-bold text-gray-900">Plaintes</h1>
		</div>

        <Table
            :tableTitles="['Dépositaire', 'Titre', 'Assignée à', 'Urgence', 'Status']"
            :tableKeys="[{function: getUser}, {function: getTitle}, {function: getAssignedUser}, {function: getEmergency}, {function: getStatus}]"
            :data="complains"
            :actions="[
                // { type: 'Link', as: 'a', method: 'GET', routeName: '#', param: 'id', icon: ArrowTopRightOnSquareIcon, iconText: 'Détails' },
            ]"
            :pagination=true
        />
    </DashboardLayout>
</template>
