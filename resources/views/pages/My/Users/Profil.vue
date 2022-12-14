<template>
        <section class="max-w-xl mx-auto">
        <h1 class="text-safearea-grey text-center mb-2">Mon Profil</h1>
    <form @submit.prevent="submitProfil" class="h-auto w-auto m-auto flex flex-col justify-center items-center">
        <div class="md:flex items-stretch">
            <a href="#">
            <span class="inline-block h-20 w-20 overflow-hidden rounded-full bg-gray-100">
                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
            <div :class="[{'form-error-div': form.errors.lastname},'m-3']">
                <label for="name" class="ml-px block pl-4 text-sm font-medium text-gray-700">Nom<span style="color: red;">*</span></label>
                <div class="m-1">
                    <input type="text" name="lastname" id="lastname" v-model="form.lastname" class="block w-full rounded-md border-gray-300 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Smith" />
                    <div v-if="form.errors.lastname" class="form-error-field">{{ form.errors.lastname }}</div>
                </div>
            </div>


            <div :class="[{'form-error-div': form.errors.firstname},'m-3']">
                <label for="name" class="ml-px block pl-4 text-sm font-medium text-gray-700">Prénom<span style="color: red;">*</span></label>
                <div class="m-1">
                    <input type="text" name="firstname" id="firstname" v-model="form.firstname" class="block w-full rounded-md border-gray-300 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Jane" />
                </div>
            </div>

            <div :class="[{'form-error-div': form.errors.emailpro},'m-3']">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Pro<span style="color: red;">*</span></label>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <input type="email" name="emailpro" id="emailpro" v-model="form.emailpro" class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com" />
                    </div>
                </div>
            </div>
            <div :class="[{'form-error-div': form.errors.emailperso},'m-3']">
                <div>
                    <div class="flex justify-between">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Perso</label>
                    </div>
                    <div>
                        <input type="email" name="emailperso" id="emailperso" v-model="form.emailperso" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com" aria-describedby="email-optional" />
                    </div>
                </div>
            </div>
        </div>   


        <button type="submit" class="btn-primary text-white font-bold py-2 px-4 rounded-md m-3">
            Enregistrer les informations
        </button>
     </form>

     <form @submit.prevent="submitPassword" class="h-auto w-auto m-auto flex flex-col justify-center items-center">
        <div class="m-0.5 w-full">
            <div :class="[{'form-error-div': form.errors.old_password},'m-3']">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe actuel<span style="color: red;">*</span></label>
                <div class="m-1">
                    <input id="old_password" v-model="form.old_password" name="old_password" type="password" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
            <div :class="[{'form-error-div': form.errors.password},'m-3']">
                <label for="password" class="block text-sm font-medium text-gray-700">Nouveau mot de passe<span style="color: red;">*</span></label>
                <div class="m-1">
                    <input id="password" v-model="form.password" name="password" type="password" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                </div>
            </div>

            <div :class="[{'form-error-div': form.errors.password_confirmation},'m-3']">
                <label for="password" class="block text-sm font-medium text-gray-700">Confirmation mot de passe<span style="color: red;">*</span></label>
                <div class="m-1">
                    <input id="password_confirmation" v-model="form.password_confirmation" name="password_confirmation" type="password" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                </div>
            </div>
        </div>

        <button type="submit" class="btn-primary text-white font-bold py-2 px-4 rounded-md m-3">
            Enregistrer un nouveau mot de passe
        </button>
        </form>

        <button type="submit" class="text-white font-bold py-2 px-4 rounded-md m-3">
            Supprimer mon compte
        </button>
    </section>

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
                old_password: this.user.password,
                password: null,
                password_confirmation : null
            }),
        };
    },
    methods: {
        submitProfil() {
            this.form.put(route("my.auth.dashboard.profil.update"), {
                onStart: () => {
                    this.form.clearErrors();
                },
            });
        },
        submitPassword() {
            this.form.put(route("my.auth.dashboard.profil.password"), {
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
