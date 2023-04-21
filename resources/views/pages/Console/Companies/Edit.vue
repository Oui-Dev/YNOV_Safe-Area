<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import CardForm from "../../../components/dashboard/CardForm.vue";
import Input from "../../../components/dashboard/Input.vue";
import { useForm, Link } from '@inertiajs/inertia-vue3';
import { XMarkIcon } from "@heroicons/vue/20/solid";

const props = defineProps({
    company: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    name: props.company.name,
    address: props.company.address,
    city: props.company.city,
    zip_code: props.company.zip_code,
    siret: props.company.siret,
    siren: props.company.siren,
    phone: props.company.phone,
    email: props.company.email,
});

const submit = () => {
    form.put(route('console.auth.companies.edit.put',  props.company.id ), {
        onStart: () => form.clearErrors(),
    });
}

</script>

<template>
    <DashboardLayout>
        <CardForm
			card-title="Entreprises"
			card-description="Dans cette section vous pouvez modifier une entreprise."
			form-title="Modifier l'entreprise"
		>
            <Link class="absolute right-1 top-1"
                  :href="route('console.auth.companies.list')">
                <XMarkIcon class="h-5 w-5 cursor-pointer text-white hover:text-safearea-grey lg:text-black lg:hover:text-safearea-red" />
            </Link>
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
                <button type="submit" class="btn primary sm mt-8">Enregistrer les informations</button>
            </form>
		</CardForm>
    </DashboardLayout>
</template>
