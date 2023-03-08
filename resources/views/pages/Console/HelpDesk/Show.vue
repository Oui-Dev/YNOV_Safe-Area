<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { ref, watch } from 'vue'
import { PaperClipIcon, ArrowLongLeftIcon, CheckIcon, ChevronUpDownIcon } from '@heroicons/vue/20/solid'
import { Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions, Switch, SwitchGroup, SwitchLabel } from '@headlessui/vue'
import DashboardLayout from "../../../layouts/dashboard.vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    ticket: {
        type: Object,
        required: true,
    },
    users: {
        type: Object,
        required: true,
    },
    statuses: {
        type: Object,
        required: true,
    }
});

const statuses = ref(props.statuses).value;
const selectedStatus = ref(props.ticket.status_id);
const isUrgent = ref(props.ticket.is_urgent === 1 ? true : false);

watch(() => selectedStatus.value, (value) => {
    Inertia.put(route('console.auth.helpDesk.update', props.ticket.id), {
        preserveScroll: true,
        status: value,
        is_urgent: isUrgent.value ? 1 : 0
    });
});

watch(() => isUrgent.value, (value) => {
    Inertia.put(route('console.auth.helpDesk.update', props.ticket.id), {
        preserveScroll: true,
        status: selectedStatus.value,
        is_urgent: value ? 1 : 0
    });
});

const getUser = (ticket) => {
    if (!ticket.user) return "Utilisateur supprimé";
    return ticket.user.lastname + " " + ticket.user.firstname;
};

const getCreatedDate = (ticket) => {
    const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
    return new Date(ticket.created_at).toLocaleDateString('fr-FR', options);
}

const getStatusName = () => {
    const status = statuses.find(status => status.id === selectedStatus.value);
    return status.name;
}

const getStatusColor = () => {
    const status = statuses.find(status => status.id === selectedStatus.value);
    return status.color;
}

</script>

<template>
    <DashboardLayout>
        <Link :href="route('console.auth.helpDesk.list')"
              class="flex flex-row gap-1 text-safearea-blue hover:text-safearea-red mb-2">
        <ArrowLongLeftIcon class="h-6 w-6 " />Retour</Link>
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Ticket {{ ticket.reference }}</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Créé le {{ getCreatedDate(ticket) }}</p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Demandeur</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ getUser(ticket) }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Adresse Mail</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ ticket.user.professional_email }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Type</dt>
                        <dd class="mt-1 text-sm text-gray-900 capitalize">{{ ticket.type }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <Listbox as="div" v-model="selectedStatus">
                            <ListboxLabel class="block text-sm font-medium text-gray-500">Status</ListboxLabel>
                            <div class="relative mt-1">
                                <ListboxButton class="relative w-full sm:w-1/2 cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-safearea-blue focus:outline-none focus:ring-1 focus:ring-safeborder-safearea-blue sm:text-sm">
                                    <div class="flex items-center justify-start gap-4">
                                        <div class="h-4 w-4 rounded-full"
                                            :class="getStatusColor()"
                                            :title="getStatusName()" />
                                        <span class="block truncate">{{ getStatusName() }}</span>
                                    </div>
                                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                        <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                                    </span>
                                </ListboxButton>
                                <transition leave-active-class="transition ease-in duration-100"
                                            leave-from-class="opacity-100"
                                            leave-to-class="opacity-0">
                                    <ListboxOptions class="absolute z-10 mt-1 max-h-56 w-full sm:w-1/2 overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                        <ListboxOption as="template"
                                                       v-for="status in statuses"
                                                       :key="status.id"
                                                       :value="status.id"
                                                       v-slot="{ active, selected }">
                                            <li :class="[active ? 'text-white bg-safearea-blue' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                <div class="flex items-center justify-start gap-4">
                                                    <div class="h-4 w-4 rounded-full"
                                                        :class="status.color"
                                                        :title="status.name" />
                                                    <span :class="[selected ? 'font-semibold' : 'font-normal', 'block truncate']"
                                                          class="capitalize">{{ status.name }}</span>
                                                </div>
                                                <span v-if="selected"
                                                    :class="[active ? 'text-white' : 'text-safebg-safearea-blue', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                                    <CheckIcon class="h-5 w-5" aria-hidden="true" />
                                                </span>
                                            </li>
                                        </ListboxOption>
                                    </ListboxOptions>
                                </transition>
                            </div>
                        </Listbox>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Prioritaire ?</dt>
                        <SwitchGroup as="div" class="flex items-start justify-start mt-2">
                            <Switch type="checkbox"
                                    v-model="isUrgent"
                                    :class="[isUrgent ? 'bg-safearea-red' : 'bg-safearea-blue', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
                                <span aria-hidden="true" :class="[isUrgent ? 'translate-x-5' : 'translate-x-0', 'pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                            </Switch>
                        </SwitchGroup>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">Sujet</dt>
                        <dd class="mt-1 text-sm text-gray-900 capitalize">{{ ticket.title }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Message</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ ticket.description }}</dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">Pièces jointes</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <ul role="list"
                                class="divide-y divide-gray-200 rounded-md border border-gray-200">
                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                    <div class="flex w-0 flex-1 items-center">
                                        <PaperClipIcon class="h-5 w-5 flex-shrink-0 text-gray-400" aria-hidden="true" />
                                        <span class="ml-2 w-0 flex-1 truncate">screenshot.png</span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-safearea-blue hover:text-safearea-red">Télécharger</a>
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
