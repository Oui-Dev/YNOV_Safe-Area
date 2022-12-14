<template>
    <div v-if="paginator.links.length > 3">
        <div class="flex flex-wrap gap-1 p-1 justify-end">
            <template v-for="(link, key) in paginator.links" :key="`link-${key}`">
                <Link
                class="bg-white px-4 py-3 text-sm leading-4 border rounded" :href="link.url" v-html="link.label"
                :class="{
                    'bg-safearea-blue text-white': link.active,
                    'hover:text-safearea-red': !link.active,
                    'hidden md:block' : isDisplayed(key, link),
                    'disabled': isDisabled(key)
                }" />
            </template>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
    props: {
        paginator: {
            type: Object,
            required: true,
        },
    },
    methods: {
        isDisplayed(key, link) {
            return key > 0 && key < this.paginator.links.length - 1 && !link.active;
        },
        isDisabled(key) {
            return (this.paginator.current_page - 1 === 0 && key === 0) || (this.paginator.current_page === this.paginator.last_page && key === this.paginator.links.length - 1);
        },
    },
};
</script>

<style lang="scss" scoped>
    .disabled {
        @apply cursor-not-allowed pointer-events-none bg-gray-200 text-gray-500;
    }
</style>