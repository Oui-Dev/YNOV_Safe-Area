<template>
    <div class="min-h-full">
        <DashboardNavbar />
        <div class="py-10">
            <header v-if="pageName">
                <div class="page-container">
                    <h1>
                        {{ pageName }}
                    </h1>
                </div>
            </header>
            <main>
                <div class="page-container">
                    <slot />
                </div>
            </main>
        </div>
    </div>
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
