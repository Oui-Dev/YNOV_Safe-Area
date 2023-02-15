<template>
    <dashboardVue>
        <div class="px-4 mt-3 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Plaintes</h1>
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
                                        Dépositaire
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Titre
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Assignée à
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Urgence
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                <tr v-for="(comp, personIdx) in complains.data" :key="comp.id"
                                    :class="getRowColors(personIdx) ? undefined : 'bg-gray-50'">
                                    <td
                                        v-if="currentuser.id === comp.user.id"
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ comp.user.firstname + ' ' + comp.user.lastname }}
                                    </td>
                                    <td v-if="currentuser.id === comp.user.id"
                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ comp.title }}
                                    </td>
                                    <td v-if="currentuser.id === comp.user.id"
                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ assignedUser(comp) }}
                                    </td>
                                    <td v-if="comp.urgency === 0 && currentuser.id === comp.user.id"
                                        class="whitespace-nowrap px-7 py-4 text-sm text-gray-500">
                                        <div class="h-4 w-4 bg-green-600 rounded-full"></div>
                                    </td>
                                    <td v-else-if="comp.urgency === 2 && currentuser.id === comp.user.id"
                                        class="whitespace-nowrap px-7 py-4 text-sm text-gray-500">
                                        <div class="h-4 w-4 bg-red-600 rounded-full"></div>
                                    </td>
                                    <td v-if="comp.urgency === 1 && currentuser.id === comp.user.id"
                                        class="whitespace-nowrap px-7 py-4 text-sm text-gray-500">
                                        <div class="h-4 w-4 bg-orange-500 rounded-full"></div>
                                    </td>
                                    <td v-if="currentuser.id === comp.user.id"
                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ comp.status }}
                                    </td>

                                    <div v-if="currentuser.id === comp.user.id"
                                         class="flex justify-end">
                                        <Link href="">
                                            <ArrowTopRightOnSquareIcon
                                                class="mr-5 h-5 w-5 flex-shrink-0 mt-4 text-gray-500 hover:text-safearea-red"
                                                aria-hidden="true">
                                            </ArrowTopRightOnSquareIcon>
                                        </Link>
                                    </div>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Pagination class="pt-5 border-t border-gray-200 flex items-center justify-center" :paginator="complains"/>
    </dashboardVue>
</template>


<script setup>
import Pagination from '../../../components/dashboard/Pagination.vue';
import dashboardVue from '../../../layouts/dashboard.vue';
import {Link, usePage} from '@inertiajs/inertia-vue3';
import {ArrowTopRightOnSquareIcon} from '@heroicons/vue/20/solid'
import {computed} from "vue";

const currentuser = computed(() => usePage().props.value.auth.user);

const props = defineProps({
    complains: {
        type: Object,
        required: true,
    }
});

const getRowColors = (row) => {
    return row % 2 === 0;
}

const assignedUser = (comp) => {
    return comp.assigned_user ? comp.assigned_user.firstname + " " + comp.assigned_user.lastname : 'Not assigned';
}
</script>
