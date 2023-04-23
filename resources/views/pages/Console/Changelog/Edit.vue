<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import CardForm from "../../../components/dashboard/CardForm.vue";
import Input from "../../../components/dashboard/Input.vue";
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    versions: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    name: props.versions.name,
    generation: props.versions.generation,
    correction: props.versions.correction,
    revision: props.versions.revision,
    changelog: props.versions.changelog,
});

const submit = () => {
    form.put(route('console.auth.changelog.edit.put',  props.versions.id ), {
        onStart: () => form.clearErrors(),
    });
}
</script>

<template>
    <DashboardLayout>
        <CardForm
			card-title="Changelog"
			card-description="Dans cette section vous pouvez modifier une version de la platforme."
            back-link="console.auth.changelog.list"
			form-title="Modifier la version"
		>
            <form @submit.prevent="submit">
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
				    <Input v-model="form.name" :error="form.errors?.name" title="Nom" />
				    <Input v-model="form.generation" :error="form.errors?.generation" title="Générations" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
                    <Input v-model="form.correction" :error="form.errors?.correction" title="Correction" />
                    <Input v-model="form.revision" :error="form.errors?.revision" title="Révision" />
                </div>
				<div :class="['pt-3', { 'form-error-div': form.errors.changelog }]">
					<label for="changelog">Description :</label>
					<textarea v-model="form.changelog" rows="5" class="resize-none" id="changelog" aria-describedby="changelog-max"></textarea>
					<div class="flex justify-between w-full">
						<div v-if="form.errors.changelog" class="form-error-field">{{ form.errors.changelog }}</div>
						<span id="changelog-max" class="text-right w-full text-sm text-gray-500">Max. 500 char.</span>
					</div>
				</div>
                <button type="submit" class="btn primary sm mt-8">Enregistrer les informations</button>
            </form>
		</CardForm>
    </DashboardLayout>
</template>
