<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import Avatar from "../../../components/dashboard/Avatar.vue";
import Input from "../../../components/dashboard/Input.vue";
import { useForm, usePage } from '@inertiajs/inertia-vue3';
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
    old_password: "",
    password: "",
    password_confirmation: ""
});

const isRoot = computed(() => usePage().props.value.auth.user.roles.some((e) => e === 'root'));
const getInitials = computed(() => props.user.firstname[0] + props.user.lastname[0]);
const routePrefix = isRoot.value ? 'console.' : 'my.';

function submitProfil() {
    form.put(route(routePrefix + "auth.profil.update"), {
        onStart: () => {
            form.clearErrors();
        },
    });
}

function submitPassword() {
    form.put(route(routePrefix + "auth.profil.password"), {
        onStart: () => {
            form.clearErrors();
        },
    });
}
</script>

<template>
    <DashboardLayout>
        <section class="max-w-5xl mx-auto">
            <div class="flex flex-col-reverse md:flex-row items-center gap-6">
                <Avatar :initials=getInitials></Avatar>
                <h2 class="text-safearea-grey text-center text-4xl">Mon Profil</h2>
            </div>

            <!-- Profil form -->
            <div class="profile-card mt-8">
                <h3>Mes informations personnelles</h3>
                <form @submit.prevent="submitProfil">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <Input v-model="form.firstname" :error="form.errors?.firstname" title="Prénom" />
                        <Input v-model="form.lastname" :error="form.errors?.lastname" title="Nom" />
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <Input v-model="form.emailpro" :error="form.errors?.emailpro" title="Email Pro" type="email" />
                        <Input v-model="form.emailperso" :error="form.errors?.emailperso" title="Email Perso" type="email" />
                    </div>

                    <button type="submit" class="btn primary sm mt-8">Modifier</button>
                </form>
            </div>

            <!-- Password form -->
            <div class="profile-card mt-8">
                <h3>Modifier mon mot de passe</h3>
                <form @submit.prevent="submitPassword">
                    <Input v-model="form.old_password" :error="form.errors?.old_password" title="Mot de passe actuel" type="password" />
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <Input v-model="form.password" :error="form.errors?.password" title="Nouveau mot de passe" type="password" />
                        <Input v-model="form.password_confirmation" :error="form.errors?.password_confirmation" title="Confirmation du mot de passe" type="password" />
                    </div>

                    <button type="submit" class="btn primary sm mt-8">
                        Modifier mon mot de passe
                    </button>
                </form>
            </div>
        </section>
    </DashboardLayout>
</template>

<style lang="scss" scoped>
.profile-card {
    @apply rounded-lg shadow-sm bg-white p-5 border border-safearea-light-grey;

    h3 {
        @apply text-safearea-grey text-xl font-bold mb-2;
    }
}
</style>