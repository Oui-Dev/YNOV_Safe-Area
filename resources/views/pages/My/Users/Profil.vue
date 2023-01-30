<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import Avatar from "../../../components/Avatar.vue";
import { useForm } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';

const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    lastname: props.user.lastname,
    firstname: props.user.firstname,
    emailperso: props.user.personal_email,
    emailpro: props.user.professional_email,
    old_password: null,
    password: null,
    password_confirmation: null
});

const getInitials = computed(() => props.user.firstname[0] + props.user.lastname[0]);

function submitProfil() {
    form.put(route("my.auth.dashboard.profil.update"), {
        onStart: () => {
            form.clearErrors();
        },
    });
}

function submitPassword() {
    form.put(route("my.auth.dashboard.profil.password"), {
        onStart: () => {
            form.clearErrors();
        },
    });
}
</script>

<template>
    <DashboardLayout>
        <section class="max-w-xl mx-auto">
            <h1 class="text-safearea-grey text-center mb-4">Mon Profil</h1>
            <!-- Profil form -->
            <form @submit.prevent="submitProfil" class="h-auto w-auto m-auto flex flex-col justify-center items-center">
                <div class="md:flex items-stretch">
                    <Avatar :initials=getInitials></Avatar>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                    <div :class="[{ 'form-error-div': form.errors.lastname }, 'm-3']">
                        <label for="name" class="ml-px block pl-4 text-sm font-medium text-gray-700">
                            Nom <span class="text-red-500">*</span>
                        </label>
                        <div class="m-1">
                            <input v-model="form.lastname" type="text" name="lastname" id="lastname" placeholder="Smith" />
                            <div v-if="form.errors.lastname" class="form-error-field">{{ form.errors.lastname }}</div>
                        </div>
                    </div>

                    <div :class="[{ 'form-error-div': form.errors.firstname }, 'm-3']">
                        <label for="name" class="ml-px block pl-4 text-sm font-medium text-gray-700">
                            Prénom <span class="text-red-500">*</span>
                        </label>
                        <div class="m-1">
                            <input v-model="form.firstname" type="text" name="firstname" id="firstname" placeholder="Jane" />
                            <div v-if="form.errors.firstname" class="form-error-field">{{ form.errors.firstname }}</div>
                        </div>
                    </div>

                    <div :class="[{ 'form-error-div': form.errors.emailpro }, 'm-3']">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email Pro <span class="text-red-500">*</span>
                        </label>
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <input v-model="form.emailpro" type="email" name="emailpro" id="emailpro" placeholder="you@example.com" />
                            <div v-if="form.errors.emailpro" class="form-error-field">{{ form.errors.emailpro }}</div>
                        </div>
                    </div>
                    <div :class="[{ 'form-error-div': form.errors.emailperso }, 'm-3']">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Perso</label>
                        <input v-model="form.emailperso" type="email" name="emailperso" id="emailperso" placeholder="you@example.com" aria-describedby="email-optional" />
                        <div v-if="form.errors.emailperso" class="form-error-field">{{ form.errors.emailperso }}</div>
                    </div>
                </div>

                <button type="submit" class="btn-primary text-white font-bold py-2 px-4 rounded-md m-3">
                    Enregistrer les informations
                </button>
            </form>

            <!-- Password form -->
            <form @submit.prevent="submitPassword" class="h-auto w-auto m-auto flex flex-col justify-center items-center">
                <div class="m-0.5 w-full">
                    <div :class="[{ 'form-error-div': form.errors.old_password }, 'm-3']">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Mot de passe actuel <span class="text-red-500">*</span>
                        </label>
                        <div class="m-1">
                            <input id="old_password" v-model="form.old_password" name="old_password" type="password" />
                            <div v-if="form.errors.old_password" class="form-error-field">{{ form.errors.old_password }}</div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                    <div :class="[{ 'form-error-div': form.errors.password }, 'm-3']">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Nouveau mot de passe <span class="text-red-500">*</span>
                        </label>
                        <div class="m-1">
                            <input id="password" v-model="form.password" name="password" type="password" />
                            <div v-if="form.errors.password" class="form-error-field">{{ form.errors.password }}</div>
                        </div>
                    </div>

                    <div :class="[{ 'form-error-div': form.errors.password_confirmation }, 'm-3']">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Confirmation mot de passe <span class="text-red-500">*</span>
                        </label>
                        <div class="m-1">
                            <input v-model="form.password_confirmation" id="password_confirmation" name="password_confirmation" type="password" />
                            <div v-if="form.errors.password_confirmation" class="form-error-field">{{ form.errors.password_confirmation }}</div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-primary text-white font-bold py-2 px-4 rounded-md m-3">
                    Enregistrer un nouveau mot de passe
                </button>
            </form>
        </section>
    </DashboardLayout>
</template>
