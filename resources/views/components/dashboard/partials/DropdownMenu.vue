<script setup>
import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import {Link} from "@inertiajs/inertia-vue3";

const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    items: {
        type: Array,
        required: true,
    }
})
</script>

<template>
    <Popover class="relative flex" v-slot="{ open }">
        <PopoverButton :class="[open ? 'text-gray-900' : 'text-gray-500', 'border-transparent text-gray-500 hover:text-gray-700 inline-flex items-center border-b-2 text-base font-medium']">
            <span>{{ props.title }}</span>
            <ChevronDownIcon :class="[open ? 'text-gray-600' : 'text-gray-400', 'ml-2 h-5 w-5 group-hover:text-gray-500']" aria-hidden="true" />
        </PopoverButton>

        <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
            <PopoverPanel class="absolute left-1/2 z-10 mt-3 w-screen max-w-md -translate-x-1/2 transform px-2 sm:px-0 translate-y-9">
                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                        <template v-for="item in props.items" :key="item.name">
                            <Link v-if="item.type !== 'a'" :href="item.href ? route(item.href) : '#'"  as="a" class="-m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                                <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-safearea-red" aria-hidden="true" />
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">{{ item.name }}</p>
                                    <p v-if="item.description" class="mt-1 text-sm text-gray-500">{{ item.description }}</p>
                                </div>
                            </Link>
                            <a v-else :href="item.href ? route(item.href) : '#'" class="-m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                                <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-safearea-red" aria-hidden="true" />
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">{{ item.name }}</p>
                                    <p v-if="item.description" class="mt-1 text-sm text-gray-500">{{ item.description }}</p>
                                </div>
                            </a>
                        </template>
                    </div>
                </div>
            </PopoverPanel>
        </transition>
    </Popover>
</template>
