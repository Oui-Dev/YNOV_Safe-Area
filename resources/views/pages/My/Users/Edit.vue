<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import DashboardLayout from "../../../layouts/dashboard.vue";
import CardForm from "../../../components/dashboard/CardForm.vue";
import Input from "../../../components/dashboard/Input.vue";
import { CheckIcon, ChevronUpDownIcon } from "@heroicons/vue/20/solid";
import { Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions } from "@headlessui/vue";

const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
    roles: {
        type: Array,
        required: true,
    }
});

const form = useForm({
    lastname: props.user.lastname,
    firstname: props.user.firstname,
    mail: props.user.personal_email,
    phone: props.user.phone,
    mailpro: props.user.professional_email,
    identifiant: props.user.identifiant,
    sex: props.user.sex,
    userRole: props.user.roles[0].name,
});

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
        <CardForm
			card-title="Utilisateurs"
			card-description="Dans cette section, vous pouvez modifier un utilisateur de votre entreprise."
            back-link="my.auth.users.list"
			form-title="Modifier l'utilisateur"
		>
            <form @submit.prevent="submit">
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
                    <Input v-model="form.firstname" :error="form.errors?.firstname" title="Prenom" />
				    <Input v-model="form.lastname" :error="form.errors?.lastname" title="Nom" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
				    <Input v-model="form.phone" :error="form.errors?.phone" title="Téléphone" type="tel" />
				    <Input v-model="form.mail" :error="form.errors?.mail" title="Email" type="email" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
                    <Input v-model="form.mailpro" :error="form.errors?.mailpro" title="Email professionnel" type="email" />
                    <Listbox as="div" v-model="form.userRole" class="pt-3">
                        <ListboxLabel class="block text-sm font-medium text-gray-700"> Role : </ListboxLabel>
                        <div class="relative mt-1">
                            <ListboxButton
                                class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-safearea-blue focus:outline-none focus:ring-1 focus:ring-safeborder-safearea-blue sm:text-sm">
                                <span class="flex items-center">
                                    <span class="ml-1 block truncate">{{ form.userRole }}</span>
                                </span>
                                <span class="pointer-events-none absolute inset-y-0 right-0 ml-1 flex items-center pr-2">
                                    <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                                </span>
                            </ListboxButton>
                            <transition leave-active-class="transition ease-in duration-100" leave-from-class="opacity-100"
                                leave-to-class="opacity-0">
                                <ListboxOptions
                                    class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                    <ListboxOption as="template" v-for="role in props.roles" :key="role.id" :value="role"
                                        v-slot="{ active, selected }">
                                        <li
                                            :class="[active ? 'text-white bg-safearea-blue' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                            <div class="flex items-center">
                                                <span
                                                    :class="[selected ? 'font-semibold' : 'font-normal', 'ml-1 block truncate']">{{role}}
                                                </span>
                                            </div>
                                            <span v-if="selected"
                                                :class="[active ? 'text-white' : 'text-safebg-safearea-blue', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                                <CheckIcon class="h-5 w-5" aria-hidden="true" />
                                            </span>
                                        </li>
                                    </ListboxOption>
                                </ListboxOptions>
                            </transition>
                        </div>
                    </Listbox>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
                    <Input v-model="form.identifiant" :error="form.errors?.identifiant" title="Identifiant" />
                    <div :class="{ 'form-error-div': form.errors.sex }" class="pt-3">
                        <label for="sex">Sexe :</label>
                        <select id="sex" v-model="form.sex">
                            <option value="0">Homme</option>
                            <option value="1">Femme</option>
                        </select>
                        <div v-if="form.errors.sex" class="form-error-field">{{ form.errors.sex }}</div>
                    </div>
                </div>
                <button type="submit" class="btn primary sm mt-8">Enregistrer les informations</button>
            </form>
		</CardForm>
    </DashboardLayout>
</template>
