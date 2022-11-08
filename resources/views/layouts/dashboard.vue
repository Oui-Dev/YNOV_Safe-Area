<template>
    <section class="min-h-full">
        <DashboardNavbar />
        <main>
            <div class="page-container">
                <slot />
            </div>
        </main>
    </section>
</template>

<script>
import DashboardNavbar from "../components/dashboardNavbar.vue";

export default {
    components: {
        DashboardNavbar,
    },
    props: {
        pageName: String,
    }
};
</script>

<style lang="scss">

</style>
