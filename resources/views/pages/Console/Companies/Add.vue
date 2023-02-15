<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: null,
    address_id: null,
    city_id: null,
    siret: null,
    siren: null,
    phone: null,
    email: null
});

function submit() {
    form.post(route('console.auth.companies.create.post'), {
        onStart: () => form.clearErrors(),
    });
}
</script>

<template>
    <DashboardLayout>
        <div class="flex justify-center">
            <div class="max-w-s">
                <h1>Nouvelle entreprise</h1>
                <form @submit.prevent="submit" class="mt-8">
                    <div :class="{'form-error-div': form.errors.name}">
                        <label for="name">Nom :</label>
                        <input id="name" v-model="form.name" />
                        <div v-if="form.errors.name" class="form-error-field">{{form.errors.name }}</div>
                    </div>
                    <div :class="{'form-error-div': form.errors.address_id}">
                        <label for="address">Adresse :</label>
                        <input id="address" v-model="form.address_id" />
                        <div v-if="form.errors.address_id" class="form-error-field">{{form.errors.address }}</div>
                    </div>
                    <div :class="{'form-error-div': form.errors.city_id}">
                        <label for="city">Ville :</label>
                        <input id="city" v-model="form.city_id" />
                        <div v-if="form.errors.city_id" class="form-error-field">{{form.errors.city_id }}</div>
                    </div>
                    <div :class="{'form-error-div': form.errors.siret}">
                        <label for="phone">Siret :</label>
                        <input id="phone" v-model="form.siret"/>
                        <div v-if="form.errors.siret" class="form-error-field">{{form.errors.siret }}</div>
                    </div>
                    <div :class="{'form-error-div': form.errors.siren}">
                        <label for="mailpro">Siren :</label>
                        <input  id="mailpro" v-model="form.siren" />
                        <div v-if="form.errors.siren" class="form-error-field">{{form.errors.siren }}</div>
                    </div>
                    <div :class="{'form-error-div': form.errors.phone}">
                        <label for="identifiant">Téléphone :</label>
                        <input type="phone" id="identifiant" v-model="form.phone"/>
                        <div v-if="form.errors.phone" class="form-error-field">{{form.errors.phone }}</div>
                    </div>
                    <div :class="{'form-error-div': form.errors.email}">
                        <label for="identifiant">Email :</label>
                        <input type="email" id="identifiant"  v-model="form.email"/>
                        <div v-if="form.errors.email" class="form-error-field">{{form.errors.email }}</div>
                    </div>
                    <button type="submit" class="btn-primary">Enregistrer les informations</button>
                </form>
            </div>
        </div>
    </DashboardLayout>
</template>