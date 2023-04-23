<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { computed, ref } from 'vue';
import { PaperAirplaneIcon } from '@heroicons/vue/24/solid';

const emits = defineEmits(['reply']);
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
const reply = ref("");

const currentUser = computed(() => usePage().props.value.auth.user);

function isMyMessage(messageUserId) {
    return messageUserId === currentUser.value.id;
}

function getUserName(message) {
    return message.user ? `${message.user.firstname + ' ' + message.user.lastname}` : "Anonyme"
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

function sendMessage() {
    emits('reply', reply.value);
    reply.value = "";
}

</script>
<template>
    <div class="w-full max-h-[64vh] flex flex-col flex-1 overflow bg-slate-50 pt-2 overflow-y-auto px-4">
        <div v-if="props.messages.length === 0 "
            class="text-gray-300 w-full h-14 flex justify-center items-center text-xl" >
            <span>Aucun Message</span>
        </div>
        <div v-for="(message, index) in props.messages" :key="message.id">
            <div v-if="compareDates(message.created_at, messages[index-1]?.created_at)" class="text-center text-gray-500 text-sm mb-2">
                {{ datePrettyfier(message.created_at) }}
            </div>
            <div v-if="isMyMessage(message.user_id)" class="message bg-safearea-blue float-right">
                <div class="font-medium">Moi</div>
                <div class="text-sm">{{ message.content }}</div>
            </div>
            <div v-else class="message bg-safearea-red">
                <div class="font-medium">{{getUserName(message)}}</div>
                <div class="text-sm">{{ message.content }}</div>
            </div>
        </div>
    </div>
    <div class="w-full flex items-center justify-center gap-1 m-2">
        <input
            v-on:keyup.enter="sendMessage()"
            v-model="reply"
            class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
            type="text"
            :disabled="!props.canReply"
            />
        <PaperAirplaneIcon
            @click="sendMessage()"
            :class="props.canReply ? 'hover:text-safearea-blue cursor-pointer' : 'cursor-not-allowed'"
            class="h-10 w-10 pr-3"/>
        </div>
</template>

<style scoped>
.message{
    @apply w-96 max-w-full min-h-fit py-2 px-4 rounded-xl mb-6 text-white break-words;
}
</style>