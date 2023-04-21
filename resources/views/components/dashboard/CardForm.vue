<script setup>

defineProps({
    formTitle: {
        type: String,
        required: true
    },
    cardTitle: {
        type: String,
        required: true
    },
    cardDescription: {
        type: String,
        required: true
    }
});
</script>

<template>
    <section class="relative bg-gray-100 shadow-xl rounded-lg mt-6">
        <h2 class="sr-only">{{ formTitle }}</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3">
            <!-- Card -->
            <div class="relative overflow-hidden bg-gradient-to-b from-safearea-red to-safearea-blue py-10 px-6 rounded-lg">
                <div class="pointer-events-none absolute inset-0 sm:hidden" aria-hidden="true">
                    <svg class="absolute inset-0 h-full w-full" width="343" height="388" viewBox="0 0 343 388"
                        fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z"
                            fill="url(#linear1)" fill-opacity=".1" />
                        <defs>
                            <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff" />
                                <stop offset="1" stop-color="#fff" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 sm:block lg:hidden"
                    aria-hidden="true">
                    <svg class="absolute inset-0 h-full w-full" width="359" height="339" viewBox="0 0 359 339"
                        fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z"
                            fill="url(#linear2)" fill-opacity=".1" />
                        <defs>
                            <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff" />
                                <stop offset="1" stop-color="#fff" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 lg:block"
                    aria-hidden="true">
                    <svg class="absolute inset-0 h-full w-full" width="160" height="678" viewBox="0 0 160 678"
                        fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z"
                            fill="url(#linear3)" fill-opacity=".1" />
                        <defs>
                            <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff" />
                                <stop offset="1" stop-color="#fff" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <h1 class="text-2xl font-medium text-white">{{ cardTitle }}</h1>
                <p class="mt-5 max-w-3xl text-base text-indigo-50 whitespace-pre-wrap">{{ cardDescription }}</p>
            </div>
            <!-- Form slot -->
            <div class="py-8 px-6 sm:px-10 lg:col-span-2 rounded-r-lg">
                <h3 class="text-xl font-medium text-gray-900 mb-2">{{ formTitle }}</h3>
                <slot />
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>

</style>