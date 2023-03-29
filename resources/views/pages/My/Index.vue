<template>
    <DashboardLayout>
        <div class="flex flex-1 flex-col">
            <main class="flex-1 pb-8">
                <!-- Page header -->
                <div class="bg-white shadow">
                    <div class="px-4 sm:px-6 lg:mx-auto lg:max-w-6xl lg:px-8">
                        <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
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
                                            <dd
                                                class="flex items-center text-sm font-medium capitalize text-gray-500 sm:mr-6">
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
                </div>

                <div class="mt-8">
                    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Overview</h2>
                        <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Card -->
                            <div v-for="card in cards" :key="card.name" class="overflow-hidden rounded-lg bg-white shadow">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <component :is="card.icon" class="h-6 w-6 text-gray-400" aria-hidden="true" />
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="truncate text-sm font-medium text-gray-500">{{ card.name }}</dt>
                                                <dd>
                                                    <div class="text-lg font-medium text-gray-900">{{ card.amount }}</div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <a :href="card.href" class="font-medium text-cyan-700 hover:text-cyan-900">View
                                            all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mx-auto mt-8 max-w-6xl px-4 text-lg font-medium leading-6 text-gray-900 sm:px-6 lg:px-8">
                        Recent activity</h2>

                    <!-- Activity list (smallest breakpoint only) -->
                    <div class="shadow sm:hidden">
                        <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                            <li v-for="transaction in transactions" :key="transaction.id">
                                <a :href="transaction.href" class="block bg-white px-4 py-4 hover:bg-gray-50">
                                    <span class="flex items-center space-x-4">
                                        <span class="flex flex-1 space-x-2 truncate">
                                            <BanknotesIcon class="h-5 w-5 flex-shrink-0 text-gray-400" aria-hidden="true" />
                                            <span class="flex flex-col truncate text-sm text-gray-500">
                                                <span class="truncate">{{ transaction.name }}</span>
                                                <span>
                                                    <span class="font-medium text-gray-900">{{ transaction.amount }}</span>
                                                    {{ transaction.currency }}
                                                </span>
                                                <time :datetime="transaction.datetime">{{ transaction.date }}</time>
                                            </span>
                                        </span>
                                        <ChevronRightIcon class="h-5 w-5 flex-shrink-0 text-gray-400" aria-hidden="true" />
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <nav class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3"
                            aria-label="Pagination">
                            <div class="flex flex-1 justify-between">
                                <a href="#"
                                    class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-500">Previous</a>
                                <a href="#"
                                    class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-500">Next</a>
                            </div>
                        </nav>
                    </div>

                    <Table 
                        :tableTitles="['Dépositaire', 'Titre', 'Assigné à', 'Urgence', 'Status']"
                        :tableKeys="[{ function: getUser }, { function: getTitle }, { function: getAssignedUser }, { function: getEmergency }, { function: getStatus }]"
                        :data="complains" 
                        :pagination=false 
                    />

                </div>
            </main>
        </div>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from "../../layouts/dashboard.vue";
import Table from "../../components/dashboard/Table.vue";
import {
    BuildingOfficeIcon,
    CheckCircleIcon,
    ChevronRightIcon,
} from '@heroicons/vue/24/outline';

const props = defineProps({
    complains: {
        type: Array,
        required: true
    }
});


const getUser = (complain) => {
    if (!complain.user) return "Anonyme";
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
    return "<div class='h-4 w-4 rounded-full mx-auto " + complain.status.color + " ' title=' " + complain.status.name + "' />";
}
</script>

