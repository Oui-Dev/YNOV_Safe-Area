<template>
    <section class="min-h-screen">
        <Toast :toast="$page.props.toast" :popstate="$page.props.popstate" />
        <DashboardNavbar />
        <main>
            <div class="page-container min-h-screen lg:pl-64">
                <slot />
            </div>
        </main>
    </section>
</template>

<script>
import DashboardNavbar from "../components/dashboard/DashboardNavbar.vue";
import Toast from "../components/dashboard/Toast.vue";

export default {
    components: {
        DashboardNavbar,
        Toast,
    },
    props: {
        pageName: String,
    }
};
</script>

<style lang="scss">

</style>
