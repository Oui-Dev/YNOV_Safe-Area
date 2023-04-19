<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';
import { PaperAirplaneIcon } from '@heroicons/vue/24/solid';


const props = defineProps({
    messages: {
        type: Object,
        required: true
    },
    canReply: {
        type: Boolean,
        required: false,
        default: true
    },
})

console.log('props.messages', props.messages);

function isMyMessage(messageUserId) {
    return messageUserId === currentUser.value.id;
}

function getUserName(message) {
    return message.user?.firstname ?? "Anonyme"
}

function datePrettyfier(date) {
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return new Date(date).toLocaleDateString('fr-FR', options);
}

function compareDates(date1, date2) {
    if (!date2) {
        return true;
    }
    return new Date(date1).getDate() !== new Date(date2).getDate();
}

const currentUser = computed(() => usePage().props.value.auth.user);

</script>
<template>
    <div class="w-full max-h-[64vh] flex flex-col flex-1 overflow bg-slate-50 pt-2">
        <div v-for="(message, index) in props.messages" >
            <div v-if="compareDates(message.created_at, messages[index-1]?.created_at)" class="text-center text-gray-500 text-sm mb-2">
                {{ datePrettyfier(message.created_at) }}
            </div>
            <div v-if="isMyMessage(message.user_id)" class="message bg-safearea-blue float-right">
                <div>Moi</div>
                <div>{{ message.content }}</div>
            </div>
            <div v-else class="message bg-safearea-red">
                <div>{{getUserName(message)}}</div>
                <div>{{ message.content }}</div>
            </div>
        </div>
    </div>
    <div class="w-full flex items-center justify-center gap-1 m-2">
        <input
        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
         type="text"/>
         <PaperAirplaneIcon class="h-10 w-10 pr-3 cursor-pointer hover:text-safearea-blue"/>
        </div>

</template>

<style scoped>
.message{
    @apply w-96 max-w-full min-h-fit py-6 rounded-xl mb-6 px-8 text-white;
}
</style>