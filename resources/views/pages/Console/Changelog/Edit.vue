<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
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
        <div class="flex justify-center">
            <div class="max-w-s">
                <h1>Modifier la version</h1>
                <form @submit.prevent="submit()" class="mt-8">
                    <div :class="{ 'form-error-div': form.errors.name }">
                        <label for="name">Nom :</label>
                        <input id="name" v-model="form.name" />
                        <div v-if="form.errors.name" class="form-error-field">{{ form.errors.name }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.generation }">
                        <label for="generation">Génération :</label>
                        <input id="generation" v-model="form.generation" />
                        <div v-if="form.errors.generation" class="form-error-field">{{ form.errors.generation }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.correction }">
                        <label for="correction">Correction :</label>
                        <input id="correction" v-model="form.correction" />
                        <div v-if="form.errors.correction" class="form-error-field">{{ form.errors.correction }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.revision }">
                        <label for="revision">Révision :</label>
                        <input id="revision" v-model="form.revision" />
                        <div v-if="form.errors.revision" class="form-error-field">{{ form.errors.revision }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.changelog }">
                        <label for="changelog">Changelog :</label>
                        <input id="changelog" v-model="form.siret" />
                        <div v-if="form.errors.changelog" class="form-error-field">{{ form.errors.changelog }}</div>
                    </div>
                    <button type="submit" class="btn primary sm">Enregistrer les informations</button>
                </form>
            </div>
        </div>
    </DashboardLayout>
</template>
