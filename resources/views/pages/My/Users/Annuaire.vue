<script setup>
import DashboardLayout from '../../../layouts/dashboard.vue';
import { TrashIcon, PencilSquareIcon, PlusIcon } from "@heroicons/vue/24/outline";
import Table from '../../../components/dashboard/Table.vue';
import { Link, usePage } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import { computed } from 'vue';

const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
});

const isAdmin = computed(() => usePage().props.value.auth.user.roles.some((e) => e === 'admin'));

const isCurrentRef = (user) => usePage().props.value.auth.user.reference === user.reference;

function deleteUser(user) {
    Inertia.delete(route('my.auth.users.delete', { reference: user.reference }), {
        onBefore: () => {
            return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');
        },
        onSuccess: () => {
            Inertia.reload({ only: ['users'] });
        }
    });
}
</script>

<template>
    <DashboardLayout>
		<div class="flex flex-col sm:flex-row justify-between items-center gap-4">
			<h1 class="text-xl font-bold text-gray-900">Annuaire</h1>
			<Link v-if="isAdmin" :href="route('my.auth.users.create')"
				class="flex justify-center rounded-md bg-safearea-blue px-3 py-1 text-white shadow-sm hover:bg-indigo-700 gap-2"
			>
				<PlusIcon class="h-6 w-6 mx-auto"></PlusIcon>
				<span>Ajouter un utilisateur</span>
			</Link>
		</div>

        <Table
            :tableTitles="['Nom', 'Prénom', 'Email professionnel', 'Téléphone']"
            :tableKeys="['firstname', 'lastname', 'professional_email', 'phone']"
            :data="users"
            :actions="[
                { type: 'Link', as: 'a', method: 'GET', routeName: 'my.auth.users.edit', param: 'reference', icon: PencilSquareIcon, iconText: 'Modifier', condition: () => isAdmin },
                { type: 'function', function: deleteUser, icon: TrashIcon, iconText: 'Supprimer', condition: (ref) => (isAdmin && !isCurrentRef(ref)) },
            ]"
            :pagination=true
        />
    </DashboardLayout>

</template>
