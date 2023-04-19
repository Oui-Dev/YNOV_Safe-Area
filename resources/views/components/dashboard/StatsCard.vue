<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    title: {
        type: String,
        required: true
    },
    value: {
        type: Number,
        required: true
    },
    path: {
        type: String,
        required: true
    },
    clickable: {
        type: Boolean,
        required: false,
        default: false
    },
    icon: {
        type: Function,
        required: true
    },
    iconBg: {
        type: String,
        required: false,
        default: 'bg-safearea-blue'
    }
})

const bgIconClass = computed(() => {
    return `flex justify-center items-center ${props.iconBg} p-2 rounded-full w-10 h-10 text-white text-xl`;
});
</script>

<template>
    <Link :href="route(path)" :class="[clickable ? 'hover:bg-gray-50' : 'cursor-default', 'overflow-hidden rounded-lg bg-white shadow']">
        <div class="flex items-center p-5">
            <div class="mr-5 w-0 flex-1">
                <dl>
                    <dt class="truncate text-sm font-medium text-gray-500">{{ title }}</dt>
                    <dd class="text-lg font-medium text-gray-900">{{ value }}</dd>
                </dl>
            </div>
            <div :class="bgIconClass">
                <component :is="icon" />
            </div>
        </div>
    </Link>
</template>