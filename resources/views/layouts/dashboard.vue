<script setup>
import DashboardNavbar from "../components/dashboard/DashboardNavbar.vue";
import Toast from "../components/dashboard/Toast.vue";
import { usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';

const toastProps = computed(() => usePage().props.value.toast);
const popstate = computed(() => usePage().props.value.popstate);
</script>

<template>
    <main class="min-h-screen">
        <Toast :toast="toastProps" :popstate="popstate" />
        <DashboardNavbar />
        <section class="max-w-7xl mx-auto p-4 md:p-6 lg:p-8">
            <slot />
        </section>
    </main>
</template>