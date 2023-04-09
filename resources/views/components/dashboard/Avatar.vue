<template>
    <div class="avatar">
        <div v-if="props.initials" class="flex items-center justify-center text-white rounded-full w-full h-full font-medium text-xl">
            <span class="text-large uppercase font-semibold">{{props.initials}}</span>
        </div>
        <UserCircleIcon v-else class="h-full w-full text-gray-300"/>
    </div>
</template>

<script setup>
import { UserCircleIcon } from '@heroicons/vue/20/solid';
import { ref } from 'vue';

const props = defineProps({
    initials: {
        type: String,
        required: false,
        default: null
    }
});

const getBgColor = ref({hsl: 'hsl('+ Math.floor(Math.random()*360) +' '+ Math.floor(Math.random()*100) +'% 50%)'});
</script>

<style>
    .avatar{
        @apply inline-block h-16 w-16 overflow-hidden rounded-full;
        background-color: v-bind('getBgColor.hsl');
        text-shadow: 1px 1px 3px black;
    }
</style>