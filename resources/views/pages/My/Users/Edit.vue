<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    lastname: props.user.lastname,
    firstname: props.user.firstname,
    mail: props.user.personal_email,
    phone: props.user.phone,
    mailpro: props.user.professional_email,
    identifiant: props.user.identifiant,
    sex: props.user.sex
})

const submit = () => {
    form.put(route('my.auth.users.edit.put', { reference: props.user.reference }), {
        onStart: () => {
            form.clearErrors();
        }
    });
}
</script>

<template>
    <DashboardLayout>
        <div class="flex justify-center">
            <div class="max-w-s">
                <h1>Modifier l'utilisateur</h1>
                <form @submit.prevent="submit()" class="mt-8">
                    <div :class="{ 'form-error-div': form.errors.name }">
                        <label for="lastname">Nom :</label>
                        <input id="lastname" v-model="form.lastname" />
                        <div v-if="form.errors.name" class="form-error-field">{{ form.errors.name }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.firstname }">
                        <label for="firstname">Prenom :</label>
                        <input id="firstname" v-model="form.firstname" />
                        <div v-if="form.errors.firstname" class="form-error-field">{{ form.errors.firstname }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.mail }">
                        <label for="mail">Mail :</label>
                        <input type="email" id="mail" v-model="form.mail" />
                        <div v-if="form.errors.mail" class="form-error-field">{{ form.errors.mail }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.phone }">
                        <label for="phone">Numéro de téléphone :</label>
                        <input id="phone" v-model="form.phone" />
                        <div v-if="form.errors.phone" class="form-error-field">{{ form.errors.phone }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.mailpro }">
                        <label for="mailpro">Mail professionel :</label>
                        <input type="email" id="mailpro" v-model="form.mailpro" />
                        <div v-if="form.errors.mailpro" class="form-error-field">{{ form.errors.mailpro }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.identifiant }">
                        <label for="identifiant">identifiant :</label>
                        <input id="identifiant" v-model="form.identifiant" />
                        <div v-if="form.errors.identifiant" class="form-error-field">{{ form.errors.identifiant }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.sexe }">
                        <label for="sexe">Sexe :</label>
                        <select id="sexe" v-model="form.sex">
                            <option value="0">Homme</option>
                            <option value="1">Femme</option>
                        </select>
                        <div v-if="form.errors.sexe" class="form-error-field">{{ form.errors.sexe }}</div>
                    </div>
                    <button type="submit" class="btn-primary">Enregistrer les informations</button>
                </form>
            </div>
        </div>
    </DashboardLayout>
</template>
