<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import ChatRoom from "../../../components/dashboard/ChatRoom.vue";
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
  complain: {
    type: Object,
    required: true
  },
  chats: {
    type: Object,
    required: true
  },
});

const form = useForm({
  content: null,
});

const getReply = (reply) => {
  form.content = reply;
  form.post(route('my.auth.complains.chat.post', props.complain.reference), {
    onSuccess: () => {
      form.reset();
    }
  });
}

const getDate = () => {
  const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
  return new Date(props.complain.created_at).toLocaleDateString('fr-FR', options);
}

const canReply = (status) => {
  return !(status.slug === 'clos' || status.slug === 'termine' || status.slug === 'annule')
}
</script>

<template>
  <DashboardLayout>
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
      <div class="flex gap-2 flex-col md:flex-row md:justify-between px-4 py-5 sm:px-6">
        <div>
          <h3 class="text-lg font-medium leading-6 text-gray-900">Plainte : {{ props.complain.reference }} </h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">Créé le {{ getDate() }}</p>
        </div>
      </div>
      <ChatRoom :messages="props.chats"
                :canReply="canReply(props.complain.status)"
                @reply="getReply"
       />
    </div>
  </DashboardLayout>
</template>