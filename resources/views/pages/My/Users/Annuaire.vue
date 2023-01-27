<template>
    <dashboardVue>
        <div class="px-4 mt-3 sm:px-6 lg:px-8">
            <Link v-if="isAdmin()" :href="route('my.auth.users.create')"
                class="float-right items-center rounded-md border border-transparent bg-safearea-blue px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
            Ajouter un utilisateur</Link>
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Utilisateurs</h1>
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
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr v-for="(person, personIdx) in users.data" :key="person.id"
                                        :class="personIdx % 2 === 0 ? undefined : 'bg-gray-50'">
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            {{ person.firstname }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ person.lastname }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ person.professional_email }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ person.phone }}
                                        </td>
                                        <td class="relative flex flex-row gap-5 items-center justify-center whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm sm:pr-6">
                                            <Link v-if="isAdmin()" :href="route('my.auth.users.edit', { reference: person.reference })">
                                                <PencilSquareIcon 
                                                    class="h-5 w-auto flex-shrink-0 text-gray-500 hover:text-indigo-900 cursor-pointer">
                                                </PencilSquareIcon>
                                            </Link>
                                            <TrashIcon v-if="isAdmin() && !isCurrentRef(person.reference)" 
                                                @click="deleteUser(person.reference)" 
                                                class=" h-5 w-5 flex-shrink-0  text-gray-500 hover:text-safearea-red cursor-pointer">
                                            </TrashIcon>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Pagination class="pt-5 border-t border-gray-200 flex items-center justify-center" :paginator="users" />
    </dashboardVue>

</template>
  

<script setup>
import dashboardVue from '../../../layouts/dashboard.vue';
import Pagination from '../../../components/dashboard/Pagination.vue';
import { Link, usePage } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import { TrashIcon, PencilSquareIcon } from '@heroicons/vue/20/solid';
import { computed } from 'vue';

const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
});

const isAdmin = computed(() => usePage().props.auth.user.roles.some((e) => e === 'admin'));

const isCurrentRef = (ref) => {
    return usePage().props.value.auth.user.reference === ref;
}

const deleteUser = (reference) => {
    Inertia.delete(route('my.auth.users.delete', { reference: reference }), {
        onBefore: () => {
            return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');
        },
        onSuccess: () => {
            Inertia.reload({ only: ['users'] });
        }
    });
}
</script>