<script setup>
import { ref } from "vue";
import DashboardLayout from "../../layouts/dashboard.vue";
import Table from "../../components/dashboard/Table.vue";
import StatsCard from "../../components/dashboard/StatsCard.vue";
import { ExclamationCircleIcon, ExclamationTriangleIcon, BuildingOfficeIcon, CheckCircleIcon, UserIcon, DocumentTextIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
    complains: {
        type: Array,
        required: true
    },
    stats: {
        type: Object,
        required: true
    },
    lastComplain: {
        type: Object,
        required: true
    },
});

const statsCardsData = ref([
    { title: "Total utilisateurs", value: props.stats.totalUsers, icon: UserIcon, iconBg: "bg-blue-500", clickable: true, path: "my.auth.users.list" },
    { title: "Total plaintes", value: props.stats.totalComplains, icon: DocumentTextIcon, iconBg: "bg-blue-500", clickable: true, path: "my.auth.complains.list" },
    { title: "Nouvelles plaintes", value: props.stats.totalNotAssignedComplains, icon: ExclamationCircleIcon, iconBg: "bg-blue-500", clickable: true, path: "my.auth.complains.list" },
]);

const getUser = (complain) => {
    if (!complain.user) return "Anonyme";
    return complain.user.lastname + " " + complain.user.firstname;
};

const getTitle = (complain) => {
    const strLength = 60;
    return complain.title.substring(0, strLength) + (complain.title.length > strLength ? "..." : "");
};

const getContent = (content) => {
    const strLength = 150;
    return content.substring(0, strLength) + (content.length > strLength ? "..." : "");
};

const getEmergency = (complain) => {
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

const isUrgent = () => {
    return props.lastComplain.is_urgent ? true : false;
}

const isAnonymous = () => {
    return props.lastComplain.is_anonymous ? true : false;
}
</script>

<template>
    <DashboardLayout>
        <div class="flex flex-1 flex-col">
            <main class="flex-1 pb-8">
                <!-- Page header -->
                <div class="bg-white shadow rounded-md">
                    <div class="p-6 md:flex md:items-center rounded-md md:justify-between lg:border-t lg:border-gray-200">
                        <div class="min-w-0 flex-1">
                            <!-- Profile -->
                            <div class="flex items-center">
                                <img class="hidden h-16 w-16 rounded-full sm:block"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.6&w=256&h=256&q=80"
                                    alt="" />
                                <div>
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 rounded-full sm:hidden"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.6&w=256&h=256&q=80"
                                            alt="" />
                                        <h1
                                            class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:leading-9">
                                            Good morning, Emilia Birch</h1>
                                    </div>
                                    <dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                                        <dt class="sr-only">Company</dt>
                                        <dd class="flex items-center text-sm font-medium capitalize text-gray-500 sm:mr-6">
                                            <BuildingOfficeIcon class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                aria-hidden="true" />
                                            Duke street studio
                                        </dd>
                                        <dt class="sr-only">Account status</dt>
                                        <dd
                                            class="mt-3 flex items-center text-sm font-medium capitalize text-gray-500 sm:mr-6 sm:mt-0">
                                            <CheckCircleIcon class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                aria-hidden="true" />
                                            Verified account
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                            <button type="button"
                                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">Add
                                money</button>
                            <button type="button"
                                class="inline-flex items-center rounded-md border border-transparent bg-cyan-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">Send
                                money</button>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <!-- Card -->
                    <div>
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Vue globale</h2>
                        <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                            <StatsCard v-for="(card, index) in statsCardsData" :key="index" v-bind="card" />
                        </div>
                    </div>

                    <div>
                        <h2 class="mt-8 text-lg  font-medium leading-6 text-gray-900">Dernière plainte</h2>
                        <div class="flex flex-row w-auto gap-5">
                            <div class="mt-2 w-2/4">
                                <div class="relative cursor-default overflow-hidden rounded-lg bg-white shadow">
                                    <div v-if="isUrgent()"
                                        class="absolute w-10 h-10 top-0 right-0 flex justify-center items-center rounded text-white p-2 bg-red-600">
                                        <ExclamationTriangleIcon />
                                    </div>
                                    <div class="flex flex-col gap-4 p-5">
                                        <div class="flex-col flex gap-6 flex-1">
                                            <div class="w-auto">
                                                <div class="flex flex-row items-center gap-2">
                                                    <div class="text-lg font-medium text-gray-900">Référence : </div>
                                                    <div class="text-lg font-medium text-gray-500">{{ props.lastComplain.reference }}</div>
                                                </div>
                                            </div>
                                            <div class="w-auto flex flex-row gap-3">
                                                <div v-if="!isAnonymous()" class="w-1/2 flex flex-col gap-5">
                                                    <div class="flex flex-row items-center gap-1">
                                                        <div class="text-sm font-medium text-gray-900">Nom : </div>
                                                        <div class="text-sm font-medium text-gray-500">{{ props.lastComplain.user.lastname }}</div>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-1">
                                                        <div class="text-sm font-medium text-gray-900">Prénom : </div>
                                                        <div class="text-sm font-medium text-gray-500">{{ props.lastComplain.user.firstname }}
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-1">
                                                        <div class="text-sm font-medium text-gray-900">Email personnel :
                                                        </div>
                                                        <div class="text-sm font-medium text-gray-500">{{ props.lastComplain.user.professional_email }}</div>
                                                    </div>
                                                </div>
                                                <div v-else class="w-1/2 flex flex-col gap-5">
                                                    <div class="flex flex-row items-center gap-1">
                                                        <div class="text-sm font-medium text-gray-900">Nom : </div>
                                                        <div class="text-sm font-medium text-gray-500">Anonyme</div>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-1">
                                                        <div class="text-sm font-medium text-gray-900">Prénom : </div>
                                                        <div class="text-sm font-medium text-gray-500">Anonyme</div>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-1">
                                                        <div class="text-sm font-medium text-gray-900">Email personnel :</div>
                                                        <div class="text-sm font-medium text-gray-500">Anonyme</div>
                                                    </div>
                                                </div>
                                                <div class="h-auto w-px bg-gray-400"></div>
                                                <div class="w-1/2 flex gap-3 flex-col">
                                                    <div class="text-base font-medium text-gray-800 truncate">{{ props.lastComplain.title }}</div>
                                                    <div class="text-sm font-normal text-gray-800">{{ getContent(props.lastComplain.content) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 w-2/4">
                                <div class="cursor-default overflow-hidden rounded-lg bg-white shadow">
                                    <div class="flex items-center p-5">
                                        <div class="mr-5 w-0 flex gap-20 flex-1">
                                            <div>
                                                <div class="text-lg font-medium text-gray-900">Dépositaire</div>
                                                <div class="text-sm font-medium text-gray-500">{{ }}</div>
                                            </div>
                                            <div>
                                                <div class="text-lg font-medium text-gray-900">Titre</div>
                                                <div class="text-sm font-medium text-gray-500">{{ }}</div>
                                            </div>
                                            <div>
                                                <div class="text-lg font-medium text-gray-900">Référence</div>
                                                <div class="text-sm font-medium text-gray-500">{{ }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mt-8 text-lg font-medium leading-6 text-gray-900">
                        Recent activity
                    </h2>

                    <Table :tableTitles="['Dépositaire', 'Titre', 'Urgence']"
                        :tableKeys="[{ function: getUser }, { function: getTitle }, { function: getEmergency }]"
                        :data="complains" :pagination=false />
                </div>
            </main>
    </div>
</DashboardLayout></template>
