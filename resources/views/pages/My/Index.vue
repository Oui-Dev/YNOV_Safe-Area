<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { computed, ref } from "vue";
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
    complainChat: {
        type: Object,
        required: true
    }
});


const statsCardsData = ref([
    { title: "Total utilisateurs", value: props.stats.totalUsers, icon: UserIcon, iconBg: "bg-blue-500", clickable: true, path: "my.auth.users.list" },
    { title: "Total plaintes", value: props.stats.totalComplains, icon: DocumentTextIcon, iconBg: "bg-blue-500", clickable: true, path: "my.auth.complains.list" },
    { title: "Nouvelles plaintes", value: props.stats.totalNotAssignedComplains, icon: ExclamationCircleIcon, iconBg: "bg-blue-500", clickable: true, path: "my.auth.complains.list" },
]);

const isUrgent = computed(() => props.lastComplain.is_urgent ? true : false );
const isAnonymous = computed(() => props.lastComplain.is_anonymous ? true : false );

const getUser = (complain) => {
    if (!complain.user) return "Anonyme";
    return complain.user.lastname + " " + complain.user.firstname;
};

const getTitle = (complain) => {
    const strLength = 60;
    return complain.title.substring(0, strLength) + (complain.title.length > strLength ? "..." : "");
};

const getContent = (content, size = 150) => {
    return content.substring(0, size) + (content.length > size ? "..." : "");
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
</script>

<template>
    <DashboardLayout>
        <section>
            <h2>Vue globale</h2>
            <div class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <StatsCard v-for="(card, index) in statsCardsData" :key="index" v-bind="card" />
            </div>
        </section>

        <section class="mt-8">
            <h2>Dernière plainte</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
                <div class="mt-2">
                    <div v-if="lastComplain" class="relative rounded-lg bg-white shadow h-full">
                        <div v-if="isUrgent"
                            class="absolute w-10 h-10 top-0 right-0 flex justify-center items-center rounded text-white p-2 bg-red-600">
                            <ExclamationTriangleIcon />
                        </div>
                        <div class="flex flex-col gap-4 p-5">
                            <div class="flex-col flex gap-6">
                                <div class="w-auto">
                                    <Link :href="route('my.auth.complains.edit', props.lastComplain.reference)">
                                        <div class="flex flex-row items-center gap-2">
                                            <div class="text-lg font-medium text-gray-900">Référence : </div>
                                            <div class="text-lg font-medium text-gray-500">{{ props.lastComplain.reference }}</div>
                                        </div>
                                    </Link>
                                </div>
                                <div class="w-auto flex md:flex-row sm:flex-col gap-3">
                                    <div v-if="isAnonymous" class="w-1/2 flex flex-col gap-5">
                                        <div class="flex flex-row items-center gap-1">
                                            <div class="text-sm font-medium text-gray-900">Nom : </div>
                                            <div class="text-sm font-medium text-gray-500">Anonyme</div>
                                        </div>
                                        <div class="flex flex-row items-center gap-1">
                                            <div class="text-sm font-medium text-gray-900">Prénom : </div>
                                            <div class="text-sm font-medium text-gray-500">Anonyme</div>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <div class="text-sm font-medium text-gray-900 whitespace-nowrap">Email personnel :</div>
                                            <div class="text-sm font-medium text-gray-500">Anonyme</div>
                                        </div>
                                    </div>
                                    <div v-else class="w-1/2 flex flex-col gap-5">
                                        <div class="flex flex-row items-center gap-1">
                                            <div class="text-sm font-medium text-gray-900">Nom : </div>
                                            <div class="text-sm font-medium text-gray-500">{{ props.lastComplain.user.lastname }}</div>
                                        </div>
                                        <div class="flex flex-row items-center gap-1">
                                            <div class="text-sm font-medium text-gray-900">Prénom : </div>
                                            <div class="text-sm font-medium text-gray-500">{{ props.lastComplain.user.firstname }}</div>
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <div class="text-sm font-medium text-gray-900 whitespace-nowrap">Email personnel :</div>
                                            <div class="text-sm font-medium text-gray-500">{{ props.lastComplain.user.professional_email }}</div>
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
                    <div v-else>
                        Aucune données
                    </div>
                </div>

                <div class="mt-2">
                    <div class="rounded-lg bg-white shadow h-full">
                        <div class="flex flex-col gap-5 p-5">
                            <Link :href="route('my.auth.complains.edit', props.complainChat.complain.reference)">
                                <div class="w-auto flex flex-row items-center gap-1">
                                    <div class="text-lg font-medium text-gray-900">Référence :</div>
                                    <div class="text-sm font-medium text-gray-500">{{ props.complainChat.complain.reference }}</div>
                                </div>
                            </Link>
                            <div class="text-sm font-medium text-gray-900">{{ getContent(props.complainChat.complain.title) }}</div>
                            <div class="text-sm font-medium text-gray-500">{{ getContent(props.complainChat.content, 300) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-8">
            <h2>Activité récente</h2>
            <Table
                :tableTitles="['Dépositaire', 'Titre', 'Urgence']"
                :tableKeys="[{ function: getUser }, { function: getTitle }, { function: getEmergency }]"
                :data="complains"
                :pagination=false
            />
        </section>
    </DashboardLayout>
</template>

<style lang="scss" scoped>
h2 {
    @apply text-lg font-medium text-safearea-red;
}
</style>