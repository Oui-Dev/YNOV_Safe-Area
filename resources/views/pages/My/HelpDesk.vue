<template>
	<DashboardLayout>
		<div class="bg-white xl:flex xl:px-20 lg:flex lg:px-20 justify-center items-center h-screen">
			<div class="mx-auto max-w-7xl w-auto">
				<div class="relative bg-gray-100 shadow-xl rounded-lg">
					<h2 class="sr-only">Créez un ticket de support</h2>
					<div class="grid grid-cols-1 lg:grid-cols-3">
						<!-- Contact information -->
						<div class="relative overflow-hidden bg-gradient-to-b from-safearea-red to-safearea-blue py-10 px-6 rounded-lg">
							<div class="pointer-events-none absolute inset-0 sm:hidden" aria-hidden="true">
								<svg class="absolute inset-0 h-full w-full" width="343" height="388" viewBox="0 0 343 388" fill="none"
									preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
									<path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)"
										fill-opacity=".1" />
									<defs>
										<linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66"
											gradientUnits="userSpaceOnUse">
											<stop stop-color="#fff" />
											<stop offset="1" stop-color="#fff" stop-opacity="0" />
										</linearGradient>
									</defs>
								</svg>
							</div>
							<div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 sm:block lg:hidden" aria-hidden="true">
								<svg class="absolute inset-0 h-full w-full" width="359" height="339" viewBox="0 0 359 339" fill="none"
									preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
									<path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)"
										fill-opacity=".1" />
									<defs>
										<linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66"
											gradientUnits="userSpaceOnUse">
											<stop stop-color="#fff" />
											<stop offset="1" stop-color="#fff" stop-opacity="0" />
										</linearGradient>
									</defs>
								</svg>
							</div>
							<div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 lg:block" aria-hidden="true">
								<svg class="absolute inset-0 h-full w-full" width="160" height="678" viewBox="0 0 160 678" fill="none"
									preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
									<path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)"
										fill-opacity=".1" />
									<defs>
										<linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66"
											gradientUnits="userSpaceOnUse">
											<stop stop-color="#fff" />
											<stop offset="1" stop-color="#fff" stop-opacity="0" />
										</linearGradient>
									</defs>
								</svg>
							</div>
							<h1 class="text-2xl font-medium text-white">Bonjour, {{ currentUser.lastname }}</h1>
							<p class="mt-6 max-w-3xl text-base text-indigo-50">Les données sont confidentielles.</p>
							<p class="mt-2 max-w-3xl text-base text-indigo-50">Ne partagez pas de données personnelles ou sensibles.</p>
						</div>
						<!-- Contact form -->
						<div class="py-8 px-6 sm:px-10 lg:col-span-2 rounded-r-lg">
							<h3 class="text-xl font-medium text-gray-900">Créez un ticket de support</h3>
							<form @submit.prevent="submit" method="POST" class="mt-6 grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-8">
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
								<div class="sm:col-span-2" :class="{ 'form-error-div': form.errors.title }">
									<label for="title" class="block text-sm font-medium text-gray-900">Titre</label>
									<div class="mt-1">
										<input type="text" name="title" v-model="form.title" id="title"
											class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
									</div>
									<div v-if="form.errors.title" class="form-error-field"> {{ form.errors.title }} </div>
								</div>
								<div class="sm:col-span-2" :class="{ 'form-error-div': form.errors.message }">
									<div class="flex justify-between">
										<label for="message" class="block text-sm font-medium text-gray-900">Message</label>
										<span id="message-max" class="text-sm text-gray-500">Max. 500 char.</span>
									</div>
									<div class="mt-1">
										<textarea id="message" v-model="form.message" name="message" rows="4"
											class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
											aria-describedby="message-max" />
									</div>
									<div v-if="form.errors.message" class="form-error-field"> {{ form.errors.message }} </div>
								</div>
								<div class="sm:col-span-2">
									<label class="block text-sm font-medium text-gray-900">Ajoutez un document</label>
									<Dropzone @file="getFile" />
								</div>
								<div class="sm:col-span-2 sm:flex sm:justify-end">
									<button type="submit"
										class="mt-2 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-safearea-blue px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Soumettre</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</DashboardLayout>
</template>

<script setup>
import DashboardLayout from "../../layouts/dashboard.vue";
import { Switch, SwitchGroup, SwitchLabel } from '@headlessui/vue'
import Dropzone from "../../components/dashboard/Dropzone.vue"; // Import the dropzone component
import { useForm, usePage } from "@inertiajs/inertia-vue3";
import { computed, ref } from "vue";

const currentUser = computed(() => usePage().props.value.auth.user);
const isLoading = ref(false);
const form = useForm({
	type: false,
	title: null,
	message: null,
	file: null,
});


const submit = () => {
	form.post(route("my.auth.helpDesk.add.post"), {
		onStart: () => {
			form.clearErrors();
			isLoading.value = true;
		},
		onFinish: () => {
			isLoading.value = false;
		},
		onSuccess: () => {
			form.reset();
		},
		onError: (errors) => {
			console.log(errors);
		},
	});
};
const getFile = (file) => {
	form.file = file;
}
</script>

<style lang="scss" scoped>
button:disabled {
	@apply bg-safearea-grey;
}
</style>