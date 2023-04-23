<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import CardForm from "../../../components/dashboard/CardForm.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { computed } from "vue";


const props = defineProps({
    token: {
        type: Object,
        required: true
    }
});

const form = useForm({
    answer: 'reject',
    is_anonymous: false,
});

const getRef = computed(() => props.token.token.split('--')[1]);

function submit(state) {
    form.answer = state;
    form.post(route("my.auth.complains.update.anonym", props.token), {
        onStart: () => {
            form.clearErrors();
        },
    });
}
</script>

<template>
    <DashboardLayout>
        <CardForm
			card-title="Lever l'anonymat"
			:card-description="'Dans cette section, vous pouvez choisir de lever l\'anonymat où non.'"
			form-title="Souhaitez-vous lever l'anonymat sur votre plainte ?"
		>
        <div :class="{ 'form-error-div': form.errors.is_anonymous }" class="flex flex-col h-6">
            <div>
                <input v-model="form.is_anonymous" id="confirmAnonym" name="confirmAnonym" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600 mr-2" />
                <label class="text-xs">En confirmant j'accepte que la plainte {{ getRef }} ne sera plus anonyme</label>
            </div>
            <div v-if="form.errors.is_anonymous" class="form-error-field text-red-500 text-sm">{{ form.errors.is_anonymous }}</div>
        </div>

        <button @click="submit('accept')" class="btn primary sm mt-16 mr-4">Accepter</button>
        <button @click="submit('reject')" class="btn primary sm mb-16 ml-4">Refuser</button>
		</CardForm>
    </DashboardLayout>
</template>
