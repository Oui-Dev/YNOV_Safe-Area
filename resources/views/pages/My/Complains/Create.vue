<template>
    <div class="flex justify-center">
        <div class="max-w-s">
            <h1>Nouvelle plainte</h1>
            <form @submit.prevent="submit" class="mt-8">
                <div :class="{ 'form-error-div': form.errors.title }">
                    <label for="title">Titre :</label>
                    <input id="title" v-model="form.title" />
                    <div v-if="form.errors.title" class="form-error-field">{{ form.errors.title }}</div>
                </div>
                <div :class="{ 'form-error-div': form.errors.description }">
                    <label for="description">Description :</label>
                    <textarea rows="7" class="resize-none" id="description" v-model="form.description"> </textarea>
                    <div v-if="form.errors.description" class="form-error-field">{{ form.errors.description }}</div>
                </div>
                <div :class="{ 'form-error-div': form.errors.file }">
                    <label for="url">Lien vers une pièce jointe :</label>
                    <Dropzone @file="getFile"></Dropzone>
                    <div v-if="form.errors.file" class="form-error-field">{{ form.errors.file }}</div>
                </div>
                <div :class="{ 'form-error-div': form.errors.anonymous }">
                    <div class="flex flex-row space-x-4">
                        <label for="anonymize">Poster anonymement :</label>
                        <input type="checkbox" class="w-auto mt-2" id="anonymize" v-model="form.anonymous" />
                    </div>
                    <div v-if="form.errors.anonymous" class="form-error-field">{{ form.errors.anonymous }}</div>
                </div>
                <button type="submit" class="btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
</template>

<script>
import DashboardLayout from "../../../layouts/dashboard.vue";
import Dropzone from "../../../components/dashboard/Dropzone.vue"

export default {
    name: "createUser",
    layout: DashboardLayout,
    components : {
        Dropzone
    },
    data() {
        return {
            form: this.$inertia.form({
                title: null,
                description: null,
                file: null,
                anonymous: null,
            }),
        };
    },
    methods: {
        submit() {
            this.form.post(route("my.auth.complains.create.post"), {
                onStart: () => {
                    this.form.clearErrors();
                },
            });
        },
        getFile(file) {
            this.form.file = file;
        }
    },
};
</script>
