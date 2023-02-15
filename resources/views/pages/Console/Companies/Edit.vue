<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    company: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    name: props.company.name,
    address_id: props.company.address_id,
    siret: props.company.siret,
    siren: props.company.siren,
    phone: props.company.phone,
    email: props.company.email,
})

const submit = () => {
    form.put(route('console.auth.companies.edit.put', { reference: props.company.reference }), {
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
                <h1>Modifier l'entreprise</h1>
                <form @submit.prevent="submit()" class="mt-8">
                    <div :class="{ 'form-error-div': form.errors.name }">
                        <label for="lastname">Nom :</label>
                        <input id="lastname" v-model="form.name" />
                        <div v-if="form.errors.name" class="form-error-field">{{ form.errors.name }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.address_id }">
                        <label for="Address">Adresse</label>
                        <input id="Address" v-model="form.address_id" />
                        <div v-if="form.errors.address_id" class="form-error-field">{{ form.errors.address_id }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.siret }">
                        <label for="siret">Siret :</label>
                        <input id="siret" v-model="form.siret" />
                        <div v-if="form.errors.siret" class="form-error-field">{{ form.errors.siret }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.siren }">
                        <label for="siren">Siren :</label>
                        <input id="siren" v-model="form.siren" />
                        <div v-if="form.errors.siren" class="form-error-field">{{ form.errors.siren }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.phone }">
                        <label for="phone">Téléphone :</label>
                        <input id="phone" v-model="form.phone" />
                        <div v-if="form.errors.phone" class="form-error-field">{{ form.errors.phone }}</div>
                    </div>
                    <div :class="{ 'form-error-div': form.errors.email }">
                        <label for="email">Email :</label>
                        <input type="email" id="email" v-model="form.email" />
                        <div v-if="form.errors.email" class="form-error-field">{{ form.errors.email }}</div>
                    </div>
                    <button type="submit" class="btn-primary">Enregistrer les informations</button>
                </form>
            </div>
        </div>
    </DashboardLayout>
</template>
