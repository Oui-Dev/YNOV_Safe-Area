<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import { Switch, SwitchGroup, SwitchLabel } from "@headlessui/vue";
import Dropzone from "../../../components/dashboard/Dropzone.vue";
import Input from "../../../components/dashboard/Input.vue";
import CardForm from "../../../components/dashboard/CardForm.vue";
import { useForm, usePage } from "@inertiajs/inertia-vue3";
import { computed, ref } from "vue";

const currentUser = computed(() => usePage().props.value.auth.user);
const isLoading = ref(false);
const form = useForm({
	type: false,
	title: "",
	message: null,
	file: null,
});

const submit = () => {
	form.post(route("my.auth.helpdesk.add.post"), {
		onStart: () => {
			form.clearErrors();
			isLoading.value = true;
		},
		onFinish: () => {
			isLoading.value = false;
		},
		onSuccess: () => {
			form.reset();
		}
	});
};

const getFile = (file) => {
	form.file = file;
}
</script>

<template>
	<DashboardLayout>
		<CardForm
			:card-title="'Bonjour, ' + currentUser.lastname"
			:card-description="'Les données sont confidentielles.\nNe partagez pas de données personnelles ou sensibles.'"
			form-title="Créez un ticket de support"
		>
			<form @submit.prevent="submit">
				<SwitchGroup as="div" class="flex items-center justify-end sm:col-span-2 w-full">
					<SwitchLabel as="span" class="mr-3">
						<span class="text-sm font-medium text-gray-900">Demande</span>
					</SwitchLabel>
					<Switch type="checkbox" v-model="form.type"
						:class="[form.type ? 'bg-safearea-red' : 'bg-safearea-blue', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
						<span aria-hidden="true"
							:class="[form.type ? 'translate-x-5' : 'translate-x-0', 'pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
					</Switch>
					<SwitchLabel as="span" class="ml-3">
						<span class="text-sm font-medium text-gray-900">Incident</span>
					</SwitchLabel>
				</SwitchGroup>
				<Input v-model="form.title" :error="form.errors?.title" title="Titre" />
				<div :class="['pt-2', { 'form-error-div': form.errors.message }]">
					<label for="message">Description :</label>
					<textarea v-model="form.message" rows="5" class="resize-none" id="message" aria-describedby="message-max"></textarea>
					<div class="flex justify-between w-full">
						<div v-if="form.errors.message" class="form-error-field">{{ form.errors.message }}</div>
						<span id="message-max" class="text-right w-full text-sm text-gray-500">Max. 500 char.</span>
					</div>
				</div>
				<div :class="{ 'form-error-div': form.errors.file }">
					<label class="block text-sm font-medium text-gray-900">Ajoutez un document</label>
					<Dropzone @file="getFile" />
					<div v-if="form.errors.file" class="form-error-field">{{ form.errors.file }}</div>
				</div>
				<button type="submit" class="btn primary sm mt-8">Envoyer</button>
			</form>
		</CardForm>
	</DashboardLayout>
</template>

<style lang="scss" scoped>

</style>