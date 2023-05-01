<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import { PaperClipIcon, EyeIcon, XMarkIcon } from '@heroicons/vue/20/solid';
import { ChatBubbleOvalLeftEllipsisIcon, ChevronUpDownIcon, CheckIcon } from "@heroicons/vue/24/outline";
import { Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions, Switch, SwitchGroup } from '@headlessui/vue';
import { useForm } from "@inertiajs/inertia-vue3";
import { Link } from '@inertiajs/inertia-vue3';
import { computed, watch } from 'vue';

const props = defineProps({
    complain: {
        type: Object,
        required: true
    },
    admins: {
        type: Object,
        required: true
    },
    complainTypes: {
        type: Object,
        required: true
    },
    statuses: {
        type: Object,
        required: true,
    }
});

const form = useForm({
    assigned_to: props.complain.assigned_to,
    is_urgent: props.complain.is_urgent === 1,
    complain_type_id: props.complain.complain_type_id,
    status_id: props.complain.status_id,
});
const computedForm = computed(() => form.data());

const getStatusName = computed(() => {
    const status = props.statuses.find(s => s.id === form.status_id);
    return status.name;
});

const getStatusColor = computed(() => {
    const status = props.statuses.find(s => s.id === form.status_id);
    return status.color;
});

const getFileNameFromPath = computed(() => {
    const path = props.complain.file_url;
    if (!path) return null;
    return path.split('/').pop();
});

watch(computedForm, () => {
    form.put(route('my.auth.complains.edit.post', props.complain.reference));
}, { deep: true });

const getDate = (props) => {
    const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
    return new Date(props.complain.created_at).toLocaleDateString('fr-FR', options);
}

const getUser = (complain) => {
    if (!complain.user) return "Anonyme";
    return complain.user.lastname + " " + complain.user.firstname;
};

const getMail = (complain) => {
    if (!complain.user) return "Anonyme";
    return complain.user.professional_email;
};
</script>

<template>
    <DashboardLayout>
        <div class="overflow-hidden bg-white shadow sm:rounded-lg relative">
            <Link :href="route('my.auth.complains.list')" class="absolute right-1 top-1">
                <XMarkIcon class="h-5 w-5 cursor-pointer hover:text-safearea-red" />
            </Link>
            <div class="flex gap-2 flex-col md:flex-row md:justify-between px-4 py-5 sm:px-6">
                <div class="w-full">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Plainte : {{ props.complain.reference }} </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Créé le {{ getDate(props) }}</p>
                </div>

                <div class="w-auto min-w-fit flex justify-start md:justify-center">
                    <span v-if="props.complain.is_anonymous == 1 && props.complain.identity_request == 1"
                        class="bg-blue-100 h-8 text-blue-800 text-xs font-medium mr-2 px-3 py-2 rounded">
                        Demande effectuée
                    </span>

                    <Link v-if="props.complain.is_anonymous == 1 && props.complain.identity_request == 0" method="post" as="button"
                        :href="route('my.auth.complains.anonymity', props.complain.reference )"
                        class="flex justify-center h-7 md:w-44 rounded-md bg-safearea-blue p-0.5 mt-2 text-white shadow-sm hover:bg-indigo-700 gap-2"
                    >
                        <EyeIcon class="h-6 w-6"></EyeIcon>
                        <span>Lever l'anonymat</span>
                    </Link>
                </div>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Demandeur</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ getUser(props.complain) }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Adresse-mail </dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ getMail(props.complain) }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <Listbox v-model="form.status_id" as="div">
                            <ListboxLabel class="block text-sm font-medium text-gray-500">Status</ListboxLabel>
                            <div class="relative mt-1">
                                <ListboxButton class="relative w-full sm:w-1/2 cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm sm:text-sm">
                                    <div class="flex items-center justify-start gap-4">
                                        <div class="h-4 w-4 rounded-full"
                                             :style="{ backgroundColor: getStatusColor}"
                                             :title="getStatusName" />
                                        <span class="block truncate">{{ getStatusName }}</span>
                                    </div>
                                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                        <ChevronUpDownIcon class="h-5 w-5" aria-hidden="true" />
                                    </span>
                                </ListboxButton>
                                <transition leave-active-class="transition ease-in duration-100"
                                    leave-from-class="opacity-100"
                                    leave-to-class="opacity-0"
                                >
                                    <ListboxOptions class="absolute z-10 mt-1 max-h-56 w-full sm:w-1/2 overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 sm:text-sm">
                                        <ListboxOption as="template"
                                            v-for="status in props.statuses"
                                            :key="status.id"
                                            :value="status.id"
                                            v-slot="{ active, selected }"
                                        >
                                            <li :class="[active ? 'text-white bg-safearea-blue' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                <div class="flex items-center justify-start gap-4">
                                                    <div class="h-4 w-4 rounded-full" :style="{ backgroundColor: status.color}" :title="status.name" />
                                                    <span :class="[selected ? 'font-semibold' : 'font-normal', 'block truncate']" class="capitalize">
                                                        {{ status.name }}
                                                    </span>
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
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Sujet</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ props.complain.title }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Type</dt>
                        <select v-model="form.complain_type_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-1/2 p-2.5">
                            <option v-for="(complainTypes, index) in props.complainTypes" :key="index"
                                :value="complainTypes.id"> {{ complainTypes.name }} </option>
                        </select>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Assigné à</dt>
                        <select v-model="form.assigned_to"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-1/2 p-2.5">
                            <option :value="null">Non assigné</option>
                            <option v-for="(admin, index) in props.admins" :key="index" :value="admin.id">
                                {{ admin.firstname + ' ' + admin.lastname }}
                            </option>
                        </select>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Urgent</dt>
                        <SwitchGroup as="div" class="flex items-start justify-start mt-2">
                            <Switch type="checkbox" v-model="form.is_urgent"
                                :class="[form.is_urgent ? 'bg-safearea-red' : 'bg-safearea-blue', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out']">
                                <span aria-hidden="true"
                                    :class="[form.is_urgent ? 'translate-x-5' : 'translate-x-0', 'pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                            </Switch>
                        </SwitchGroup>
                    </div>
                    <Link :href="route('my.auth.complains.chat', props.complain.reference)" class="sm:col-span-1 inline-flex items-center gap-3">
                        <ChatBubbleOvalLeftEllipsisIcon class="p-2 h-10 w-10 cursor-pointer rounded-full bg-safearea-blue text-white" />
                        Accéder a la conversation
                    </Link>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">Message</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ props.complain.content }}</dd>
                    </div>
                    <div v-if="props.complain.file_url" class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                    <div class="flex w-0 flex-1 items-center">
                                        <PaperClipIcon class="h-5 w-5 flex-shrink-0 text-gray-400" aria-hidden="true" />
                                        <span class="ml-2 w-0 flex-1 truncate">{{ getFileNameFromPath }}</span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a :href="route('my.auth.complains.download', props.complain)"
                                            class="font-medium text-indigo-600 hover:text-indigo-500">Télécharger</a>
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