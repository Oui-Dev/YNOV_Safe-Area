<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    type: {
        type: String,
        required: false,
        default: null
    },
});
</script>

<template>
    <Link v-if="type !== 'a'" class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
        <slot />
    </Link>
    <a v-else class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
        <slot />
    </a>
</template>
