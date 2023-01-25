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
                <div :class="{ 'form-error-div': form.errors.content }">
                    <label for="content">Description :</label>
                    <textarea rows="7" class="resize-none" id="content" v-model="form.content"> </textarea>
                    <div v-if="form.errors.content" class="form-error-field">{{ form.errors.content }}</div>
                </div>
                <div :class="{ 'form-error-div': form.errors.content }">
                    <label for="url">Lien vers une pièce jointe :</label>
                    <Dropzone @file="getFile"></Dropzone>
                    <div v-if="form.errors.content" class="form-error-field">{{ form.errors.content }}</div>
                </div>
                <div :class="{ 'form-error-div': form.errors.is_anonymous }">
                    <div class="flex flex-row space-x-4">
                        <label for="anonymize">Poster anonymement :</label>
                        <input type="checkbox" class="w-auto mt-2" id="anonymize" v-model="form.is_anonymous" />
                    </div>
                    <div v-if="form.errors.is_anonymous" class="form-error-field">{{ form.errors.is_anonymous }}</div>
                </div>
                <div :class="{ 'form-error-div': form.errors.complain_type_id }">
                    <label for="complain_type_id">Type de plainte :</label>
                    <select id="complain_type_id" v-model="form.complain_type_id">
                        <option v-for="complain_type in complainsTypeId" :value="complain_type.id">{{ complain_type.name }}</option>
                    </select>
                    <div v-if="form.errors.complain_type_id" class="form-error-field">{{ form.errors.complain_type_id }}</div>
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
    name: "createComplain",
    layout: DashboardLayout,
    components : {
        Dropzone
    },
    props: {
        complainsTypeId: {
            type: Object,
            required: true,
        },
    },
 
    data() {
        return {
            form: this.$inertia.form({
                title: null,
                content: null,
                screen_url: null,
                is_anonymous: false,
                complain_type_id: null,
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
            this.form.screen_url = file;
        }
    },
};
</script>
