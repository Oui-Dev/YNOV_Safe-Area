<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import CardForm from "../../../components/dashboard/CardForm.vue";
import Input from "../../../components/dashboard/Input.vue";
import { useForm } from "@inertiajs/inertia-vue3";

defineProps({
    users: {
        type: Array,
        required: true,
        default: [],
    }
});

const form = useForm({
    name: "",
    address: "",
    city: "",
    zip_code: "",
    siret: "",
    siren: "",
    phone: "",
    email: "",
    owner_id: "",
});

function submit() {
    form.post(route('console.auth.companies.create.post'), {
        onStart: () => form.clearErrors(),
    });
}
</script>

<template>
    <DashboardLayout>
        <CardForm
			card-title="Entreprises"
			card-description="Dans cette section vous pouvez ajouter une nouvelle entreprise."
            back-link="console.auth.companies.list"
			form-title="Ajouter une nouvelle entreprise"
		>
            <form @submit.prevent="submit">
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
				    <Input v-model="form.name" :error="form.errors?.name" title="Nom" />
				    <Input v-model="form.address" :error="form.errors?.address" title="Adresse" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
				    <Input v-model="form.city" :error="form.errors?.city" title="Ville" />
				    <Input v-model="form.zip_code" :error="form.errors?.zip_code" title="Code postal" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
				    <Input v-model="form.siret" :error="form.errors?.siret" title="Siret" />
				    <Input v-model="form.siren" :error="form.errors?.siren" title="Siren" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
				    <Input v-model="form.phone" :error="form.errors?.phone" title="Téléphone" type="tel" />
				    <Input v-model="form.email" :error="form.errors?.email" title="Email" type="email" />
                </div>
                <div :class="{ 'form-error-div': form.errors.owner_id }">
                    <label for="owner_id">Administrateur :</label>
                    <select id="owner_id" v-model="form.owner_id">
                        <option v-if="users.length === 0" disabled>Aucun utilisateur disponible</option>
                        <option v-for="user in users" :value="user.id">
                            {{ user.firstname }} {{ user.lastname }} - {{ user.professional_email }}
                        </option>
                    </select>
                    <div v-if="form.errors.owner_id" class="form-error-field">{{ form.errors.owner_id }}</div>
                </div>
                <button type="submit" class="btn primary sm mt-8">Enregistrer les informations</button>
            </form>
		</CardForm>
    </DashboardLayout>
</template>