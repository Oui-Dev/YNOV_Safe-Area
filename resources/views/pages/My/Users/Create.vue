<template>
    <div class="flex justify-center">
        <div class="max-w-s">
        <h1>Nouvel utilisateur</h1>
            <form @submit.prevent="submit" class="mt-8">
                <div >
                    <label for="user">Nom :</label>
                    <input id="user" v-model="form.lastname" autocomplete="off"/>
                </div>
                <div >
                    <label for="user">Prenom :</label>
                    <input id="user" v-model="form.firstname" autocomplete="off"/>
                </div>
                <div >
                    <label for="user">Mail :</label>
                    <input id="user" v-model="form.mail" autocomplete="off"/>
                </div>
                <div >
                    <label for="user">Numéro de téléphone :</label>
                    <input id="user" v-model="form.phone" autocomplete="off"/>
                </div>
                <div >
                    <label for="user">Mot de passe :</label>
                    <input type="password"  id="user" v-model="form.password" autocomplete="off"/>
                </div>
                <div >
                    <label for="user">Mail professionel :</label>
                    <input type="password"  id="user" v-model="form.mailpro" autocomplete="off"/>
                </div>
                <div >
                    <label for="user">Sexe :</label>
                    <select>
                        <option value="fr">...</option>
                        <option value="fr">Homme</option>
                        <option value="fr">Femme</option>
                    </select>
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
    //layout: DashboardLayout,
    data() {
        return {
            form: this.$inertia.form({
                lastname: null,
                mail: null,
                firstname: null,
                phone: null,
                password: null,
                identifiant: null,
                mailpro: null,
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
