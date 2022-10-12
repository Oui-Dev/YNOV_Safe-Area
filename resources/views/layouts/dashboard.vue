<template>
    <div class="min-h-full">
        <DashboardNavigation />
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
import DashboardNavigation from "../components/dashboardNavbar.vue";

export default {
    components: {
        DashboardNavigation,
    },
    props: {
        pageName: String,
    }
};
</script>

<style lang="scss">

</style>
