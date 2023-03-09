<script setup>

import DashboardLayout from "../../../layouts/dashboard.vue";
import Table from '../../../components/dashboard/Table.vue';
import { computed } from 'vue';
import { ArrowTopRightOnSquareIcon, PlusIcon, TrashIcon } from "@heroicons/vue/24/outline";
import { Link, usePage } from '@inertiajs/inertia-vue3';
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
	tickets: {
		type: Object,
		required: true,
	},
	statuses: {
		type: Object,
		required: true,
	},
});

const host = window.location.host
const subdomain = host.split('.')[0]
const isRoot = computed(() => usePage().props.value.auth.user.roles.some((role) => role === 'root'));

const getUser = (ticket) => {
	if (!ticket.user) return "Utilisateur supprimé";
	return ticket.user.lastname + " " + ticket.user.firstname;
};

const getSubject = (ticket) => {
	const strLength = 30;
	return ticket.title.substring(0, strLength) + (ticket.title.length > strLength ? "..." : "");
};

const getDate = (ticket) => {
	const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
	return new Date(ticket.created_at).toLocaleDateString('fr-FR', options);
}

function getType(ticket) {
	if(ticket.type === "incident") {
		return ("<div class='w-8 h-8 rounded-lg flex justify-center items-center bg-safearea-red' title='Incident'><span class='font-semibold text-white'>I</span></div>");
	} else {
		return ("<div class='w-8 h-8 rounded-lg flex justify-center items-center bg-safearea-blue' title='Demande'><span class='font-semibold text-white'>D</span></div>");
	}
}

function getStatus(ticket) {
	const status = props.statuses.find((status) => status.id === ticket.status_id);
	return ("<div class='h-4 w-4 rounded-full mx-auto "+status.color+"' title='"+status.name+"'/>");
}

function deleteHelpdesk(ticket) {
	if (confirm('Êtes-vous sûr de vouloir supprimer ce ticket ?')) {
		Inertia.delete(route(subdomain+'.auth.helpdesk.delete', {id: ticket.id}), {}, {});
	}
}

</script>

<template>
	<DashboardLayout>
		<div class="flex flex-col sm:flex-row justify-between items-center gap-4">
			<h1 class="text-xl font-bold text-gray-900">Tickets de support</h1>
			<Link v-if="!isRoot"
				:href="route('my.auth.helpdesk.add')"
				class="flex justify-center rounded-md bg-safearea-blue px-3 py-1 text-white shadow-sm hover:bg-indigo-700 gap-2"
			>
				<PlusIcon class="h-6 w-6 mx-auto"></PlusIcon>
				<span>Nouveau Ticket</span>
			</Link>
		</div>

		<Table
			:tableTitles="['Ref', 'Date', 'Sujet', 'Demandeur', 'Type', 'Status']"
			:tableKeys="['reference', {function: getDate}, {function: getSubject}, {function: getUser}, {function: getType}, {function: getStatus}]"
			:data="tickets"
			:actions="[
				{ type: 'Link', as: 'a', method: 'GET', routeName: 'console.auth.helpdesk.show', param: 'id', icon: ArrowTopRightOnSquareIcon, iconText: 'Détails', condition: () => isRoot },
				{ type: 'function', function: deleteHelpdesk, icon: TrashIcon, iconText: 'Supprimer' },
			]"
			:pagination=true
		/>
	</DashboardLayout>
</template>
