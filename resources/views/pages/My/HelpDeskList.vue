<template>
    <DashboardLayout>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Tickets de support</h1>
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
                                            class="sm:pl-6 px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Ref</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Sujet</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Demandeur</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Type</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Statut</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr v-for="(ticket, ticketIdx) in tickets" :key="ticket.email"
                                        :class="ticketIdx % 2 === 0 ? undefined : 'bg-gray-50'" >
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6"> {{ ticket.reference }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ticket.title }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{getTicketUser(ticket).lastname}}</td>
                                        <td class="whitespace-nowrap px-3 text-sm text-gray-500">
                                            <div class="w-12 h-12 flex justify-center items-center"
                                              :class="ticket.type === 'incident' ? 'bg-safearea-red' : 'bg-safearea-blue'">
                                                <span class="font-semibold text-white"> {{ ticket.type === "incident"? "I" : "D"}} </span>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ticket.status }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-gray-500"><EyeIcon class="h-6 w-6"/></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from "../../layouts/dashboard.vue";
import { EyeIcon } from "@heroicons/vue/24/outline";

const props = defineProps({
    tickets: {
        type: Array,
        required: true,
    },
    users: {
        type: Array,
        required: true,
    },
});

function getTicketUser(ticket) {
    console.log(ticket.status)
    return props.users.find((user) => user.id === ticket.user_id);
};

</script>