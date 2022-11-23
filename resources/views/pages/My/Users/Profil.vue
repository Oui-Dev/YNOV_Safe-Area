<template>
        <h1 class="text-safearea-grey text-center m-6">Mon Profil</h1>
    <form @submit.prevent="submit" class="h-auto w-auto m-auto flex flex-col justify-center items-center">
        <div class="md:flex items-stretch m-6">
            <a href="#">
            <span class="inline-block h-20 w-20 overflow-hidden rounded-full bg-gray-100">
                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </span>
            </a>
        </div>

        <div class="m-0.5 md:flex items-stretch m-6">
        <div :class="[{'form-error-div': form.errors.lastname},'m-4']">
            <label for="name" class="ml-px block pl-4 text-sm font-medium text-gray-700">Nom</label>
            <div class="m-1">
                <input type="text" name="lastname" id="lastname" v-model="form.lastname" class="block w-full rounded-full border-gray-300 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Smith" />
                <div v-if="form.errors.lastname" class="form-error-field">{{ form.errors.lastname }}</div>
            </div>
        </div>


        <div :class="[{'form-error-div': form.errors.firstname},'m-4']">
            <label for="name" class="ml-px block pl-4 text-sm font-medium text-gray-700">Prénom</label>
            <div class="m-1">
                <input type="text" name="firstname" id="firstname" v-model="form.firstname" class="block w-full rounded-full border-gray-300 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Jane" />
            </div>
        </div>
        </div>

        <div class="m-0.5 md:flex items-stretch m-6">
        <div :class="[{'form-error-div': form.errors.emailpro},'m-4']">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Pro</label>
                <div class="relative mt-1 rounded-md shadow-sm">
                    <input type="email" name="email" id="emailpro" v-model="form.emailpro" class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com" />
                </div>
            </div>
        </div>
        <div :class="[{'form-error-div': form.errors.emailperso},'m-4']">
            <div>
                <div class="flex justify-between">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Perso</label>
                    <span class="text-sm text-gray-500" id="email-optional">Optional</span>
                </div>
                <div class="mt-1">
                    <input type="email" name="email" id="emailperso" v-model="form.emailperso" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com" aria-describedby="email-optional" />
                </div>
            </div>
        </div>
        </div>

        <div class="m-0.5 md:flex items-stretch m-6">
            <div :class="[{'form-error-div': form.errors.password},'m-4']">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <div class="m-1">
                    <input id="password" v-model="form.password" name="password" type="password" autocomplete="current-password" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                </div>
            </div>

            <div :class="[{'form-error-div': form.errors.password_confirmation},'m-4']">
                <label for="password" class="block text-sm font-medium text-gray-700">Confirmation Mot de passe</label>
                <div class="m-1">
                    <input id="password_confirmation" v-model="form.password_confirmation" name="password" type="password" autocomplete="current-password" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                </div>
            </div>
        </div>

        <button type="submit" class="bg-safearea-red hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full m-4">
            Enregistrer les informations
        </button>
    </form>


</template>

<script>
import DashboardLayout from "../../../layouts/dashboard.vue";

export default {
    name: "UserIndex",
    layout: DashboardLayout,
    props: {
        user: {
            type: Object,
            required: true,
        },
    },
    data() {
        return {
            form: this.$inertia.form({
                lastname: this.user.lastname,
                firstname: this.user.firstname,
                emailperso : this.user.personal_email,
                emailpro : this.user.professional_email,
                password: this.user.password,
                password_confirmation : null
            }),
        };
    },
    methods: {
        submit() {
            console.log('yo');
            console.log(this.form.errors?.lastname);
            this.form.put(route("my.auth.dashboard.profil.edit"), {
                onStart: () => {
                    this.form.clearErrors();
                },
            });
        },
    },
};
</script>

<style lang="scss" scoped>
</style>
