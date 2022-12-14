<template>
    <div class="flex justify-center">
        <div class="max-w-s">
        <h1>Nouvel utilisateur</h1>
            <form @submit.prevent="submit" class="mt-8">
                <div :class="{'form-error-div': form.errors.lastname}">
                    <label for="lastname">Nom :</label>
                    <input id="lastname" v-model="form.lastname" />
                    <div v-if="form.errors.lastname" class="form-error-field">{{form.errors.lastname }}</div>
                </div>
                <div :class="{'form-error-div': form.errors.firstname}">
                    <label for="firstname">Prenom :</label>
                    <input id="firstname" v-model="form.firstname" />
                    <div v-if="form.errors.firstname" class="form-error-field">{{form.errors.firstname }}</div>
                </div>
                <div :class="{'form-error-div': form.errors.mail}">
                    <label for="mail">Mail :</label>
                    <input type="email" id="mail" v-model="form.mail" />
                    <div v-if="form.errors.mail" class="form-error-field">{{form.errors.mail }}</div>
                </div>
                <div :class="{'form-error-div': form.errors.phone}">
                    <label for="phone">Numéro de téléphone :</label>
                    <input id="phone" v-model="form.phone"/>
                    <div v-if="form.errors.phone" class="form-error-field">{{form.errors.phone }}</div>
                </div>
                <div :class="{'form-error-div': form.errors.mailpro}">
                    <label for="mailpro">Mail professionel :</label>
                    <input type="email" id="mailpro" v-model="form.mailpro" />
                    <div v-if="form.errors.mailpro" class="form-error-field">{{form.errors.mailpro }}</div>
                </div>
                <div :class="{'form-error-div': form.errors.identifiant}">
                    <label for="identifiant">identifiant :</label>
                    <input id="identifiant" v-model="form.identifiant"/>
                    <div v-if="form.errors.identifiant" class="form-error-field">{{form.errors.identifiant }}</div>
                </div>
                <div :class="{'form-error-div': form.errors.sexe}">
                    <label for="sexe">Sexe :</label>
                    <select id="sexe" v-model="form.sexe">
                        <option value="0">Homme</option>
                        <option value="1">Femme</option>
                    </select>
                    <div v-if="form.errors.sexe" class="form-error-field">{{form.errors.sexe }}</div>
                </div>
                <button type="submit" class="btn-primary">Enregistrer les informations</button>
            </form>
        </div>
    </div>
</template>

<script>
import DashboardLayout from "../../../layouts/dashboard.vue";

export default {
    name: "createUser",
    layout: DashboardLayout,
    data() {
        return {
            form: this.$inertia.form({
                lastname: null,
                mail: null,
                firstname: null,
                phone: null,
                mailpro: null,
                sexe: null,
                identifiant: null,
            }),
        };
    },
    methods: {
        submit() {
            this.form.post(route("my.auth.users.create.post"), {
                onStart: () => {
                    this.form.clearErrors();
                },
            });
        },
    },
};
</script>
