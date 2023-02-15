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
    form.put(route("my.auth.profil.update"), {
        onStart: () => {
            form.clearErrors();
        },
    });
}

function submitPassword() {
    form.put(route("my.auth.profil.password"), {
        onStart: () => {
            form.clearErrors();
        },
    });
}
</script>

<template>
    <DashboardLayout>
        <section class="max-w-2xl mx-auto">
            <h2 class="text-safearea-grey text-center">Mon Profil</h2>
            <div class="flex justify-center mt-6">
                <Avatar :initials=getInitials></Avatar>
            </div>
            <!-- Profil form -->
            <form @submit.prevent="submitProfil" class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-5">
                <div :class="{'form-error-div': form.errors.firstname}">
                    <label for="firstname">Prénom<span>*</span></label>
                    <input v-model="form.firstname" type="text" id="firstname" placeholder="Jane" />
                    <div v-if="form.errors.firstname" class="form-error-field">{{ form.errors.firstname }}</div>
                </div>

                <div :class="{'form-error-div': form.errors.lastname}">
                    <label for="lastname">Nom<span>*</span></label>
                    <input v-model="form.lastname" type="text" id="lastname" placeholder="Smith" />
                    <div v-if="form.errors.lastname" class="form-error-field">{{ form.errors.lastname }}</div>
                </div>

                <div :class="{ 'form-error-div': form.errors.emailpro }">
                    <label for="email">Email Pro <span>*</span></label>
                    <input v-model="form.emailpro" type="email" id="emailpro" placeholder="you@example.com" />
                    <div v-if="form.errors.emailpro" class="form-error-field">{{ form.errors.emailpro }}</div>
                </div>

                <div :class="{ 'form-error-div': form.errors.emailperso }">
                    <label for="email">Email Perso</label>
                    <input v-model="form.emailperso" type="email" id="emailperso" placeholder="you@example.com" />
                    <div v-if="form.errors.emailperso" class="form-error-field">{{ form.errors.emailperso }}</div>
                </div>

                <div class="col-span-2 text-center">
                    <button type="submit" class="btn-primary font-bold">
                        Enregistrer les informations
                    </button>
                </div>
            </form>

            <!-- Password form -->
            <form @submit.prevent="submitPassword" class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-5">
                <div :class="[{ 'form-error-div': form.errors.old_password }, 'col-span-2']">
                    <label for="password"> Mot de passe actuel<span>*</span></label>
                    <input v-model="form.old_password" id="old_password" type="password" />
                    <div v-if="form.errors.old_password" class="form-error-field">{{ form.errors.old_password }}</div>
                </div>

                <div :class="{ 'form-error-div': form.errors.password }">
                    <label for="password">Nouveau mot de passe <span>*</span></label>
                    <input v-model="form.password" id="password" type="password" />
                    <div v-if="form.errors.password" class="form-error-field">{{ form.errors.password }}</div>
                </div>

                <div :class="{ 'form-error-div': form.errors.password_confirmation }">
                    <label for="password">Confirmation mot de passe <span>*</span></label>
                    <input v-model="form.password_confirmation" id="password_confirmation" type="password" />
                    <div v-if="form.errors.password_confirmation" class="form-error-field">{{ form.errors.password_confirmation }}</div>
                </div>

                <div class="col-span-2 text-center">
                    <button type="submit" class="btn-primary font-bold">
                        Enregistrer un nouveau mot de passe
                    </button>
                </div>
            </form>
        </section>
    </DashboardLayout>
</template>

<style lang="scss" scoped>
label > span {
    padding-left: 2px;
    color: red;
}
</style>