<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import Dropzone from "../../../components/dashboard/Dropzone.vue";
import { Switch, SwitchGroup } from '@headlessui/vue';
import { CheckIcon, XMarkIcon } from '@heroicons/vue/20/solid';
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    complainsTypes: {
        type: Array,
        required: true,
    },
});

const form = useForm({
    title: null,
    content: null,
    file_url: null,
    is_anonymous: false,
    complain_type_id: null,
});

const getFile = (file) => {
    form.file_url = file;
}

function submit() {
    form.post(route("my.auth.complains.create.post"), {
        onStart: () => {
            form.clearErrors();
        },
    });
}
</script>

<template>
    <DashboardLayout>
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
                        <label for="url">Ajoutez un document :</label>
                        <Dropzone @file="getFile"></Dropzone>
                        <div v-if="form.errors.content" class="form-error-field">{{ form.errors.content }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.complain_type_id }">
                        <label for="complain_type_id">Type de plainte :</label>
                        <select id="complain_type_id" v-model="form.complain_type_id">
                            <option v-for="complain_type in complainsTypes" :value="complain_type.id">{{
                                complain_type.name
                            }}</option>
                        </select>
                        <div v-if="form.errors.complain_type_id" class="form-error-field">{{ form.errors.complain_type_id }}
                        </div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.is_anonymous }">
                        <div class="flex flex-column pt-4 space-x-4">
                            <label class="min-w-fit" for="anonymize">Poster anonymement :</label>
                            <SwitchGroup id="anonymize" as="div" class="flex items-center  sm:col-span-2 w-full">
                                <Switch type="checkbox" v-model="form.is_anonymous"
                                    :class="[form.is_anonymous ? 'bg-safearea-red' : 'bg-safearea-blue', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
                                    <span aria-hidden="true"
                                        :class="[form.is_anonymous ? 'translate-x-5' : 'translate-x-0', 'pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']"> <CheckIcon class="text-green-600" v-if="form.is_anonymous"/> <XMarkIcon class="text-red-600" v-else/> </span>
                                </Switch>
                            </SwitchGroup>
                        </div>
                        <div v-if="form.errors.is_anonymous" class="form-error-field">{{ form.errors.is_anonymous }}</div>
                    </div>
                    <button type="submit" class="btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </DashboardLayout>
</template>
