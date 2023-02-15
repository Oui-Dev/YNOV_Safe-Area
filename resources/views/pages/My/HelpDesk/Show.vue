<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { PaperClipIcon, ArrowLongLeftIcon } from '@heroicons/vue/20/solid'
import DashboardLayout from "../../../layouts/dashboard.vue";

const props = defineProps({
    ticket: {
        type: Object,
        required: true,
    },
});

const getUser = (ticket) => {
    if (!ticket.user) return "Utilisateur supprimé";
    return ticket.user.lastname + " " + ticket.user.firstname;
};

const getCreatedDate = (ticket) => {
    const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
    return new Date(ticket.created_at).toLocaleDateString('fr-FR', options);
}

console.log(props.ticket);
</script>

<template>
    <DashboardLayout>
        <Link :href="route('my.auth.helpDesk.list')" class="flex flex-row gap-1 text-safearea-blue hover:text-safearea-red mb-2"> <ArrowLongLeftIcon class="h-6 w-6 "/>Retour</Link>
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Ticket {{ ticket.reference }}</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Créé le {{ getCreatedDate(ticket) }}</p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Demandeur</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ getUser(ticket) }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Attribué a</dt>
                        <dd class="mt-1 text-sm text-gray-900">MaBite</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Adresse Mail</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ ticket.user.professional_email }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Type</dt>
                        <dd class="mt-1 text-sm text-gray-900 capitalize">{{ ticket.type }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Status</dt>
                        <dd class="mt-1 text-sm text-gray-900 capitalize">{{ ticket.status }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Urgence</dt>
                        <dd class="mt-1 text-sm text-gray-900 capitalize">{{ ticket.emergency }}</dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">Sujet</dt>
                        <dd class="mt-1 text-sm text-gray-900 capitalize">{{ ticket.title }}</dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">Message</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ ticket.description }}</dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">Pièces jointes</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                    <div class="flex w-0 flex-1 items-center">
                                        <PaperClipIcon class="h-5 w-5 flex-shrink-0 text-gray-400" aria-hidden="true" />
                                        <span class="ml-2 w-0 flex-1 truncate">screenshot.png</span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#"
                                            class="font-medium text-safearea-blue hover:text-safearea-red">Télécharger</a>
                                    </div>
                                </li>
                            </ul>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </DashboardLayout>
</template>
