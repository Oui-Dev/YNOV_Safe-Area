<script setup>
import { ref } from "vue";
import DashboardLayout from "../../layouts/dashboard.vue";
import Table from "../../components/dashboard/Table.vue";
import StatsCard from "../../components/dashboard/StatsCard.vue";
import { UserIcon, DocumentTextIcon , BuildingOffice2Icon} from '@heroicons/vue/24/outline';

const props = defineProps({
    companies: {
        type: Array,
        required: false
    },
    stats: {
        type: Object,
        required: true
    }
});

const statsCardsData = ref([
    { title: "Total utilisateurs", value: props.stats.totalUsers, icon: UserIcon, iconBg: "bg-blue-500" },
    { title: "Total plaintes", value: props.stats.totalComplains, icon: DocumentTextIcon, iconBg: "bg-blue-500" },
    { title: "Total entreprises", value: props.stats.totalCompany, icon: BuildingOffice2Icon, iconBg: "bg-blue-500", clickable: true, path: "console.auth.companies.list" },
]);
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
            <h2>Dernières entreprises ajoutées</h2>
            <Table
                :tableTitles="['Nom', 'Adresse', 'Ville', 'Code postal']"
                :tableKeys="['name', 'address', 'city', 'zip_code']"
                :data="companies"
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