<script setup>
import DashboardLayout from "../../../layouts/dashboard.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { ref } from 'vue'
import { CheckIcon, ChevronUpDownIcon } from '@heroicons/vue/20/solid'
import { Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions } from '@headlessui/vue'

const form = useForm({
    lastname: null,
    mail: null,
    firstname: null,
    phone: null,
    mailpro: null,
    sexe: null,
    identifiant: null,
    selected: null,
});

const props = defineProps({
    roles: {
        type: Array,
        required: true,
    }
});

function submit() {
    console.log(selected);
    form.post(route("my.auth.users.create.post"), {
        onStart: () => {
            form.clearErrors();
        },
    });
}

const selected = ref(props.roles[3]);

</script>


<template>
    <DashboardLayout>
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
                    <div :class="{'form-error-div': form.errors.phone}">
                        <label for="phone">Numéro de téléphone :</label>
                        <input id="phone" v-model="form.phone"/>
                        <div v-if="form.errors.phone" class="form-error-field">{{form.errors.phone }}</div>
                    </div>
                    <div :class="{'form-error-div': form.errors.mail}">
                        <label for="mail">Mail :</label>
                        <input type="email" id="mail" v-model="form.mail" />
                        <div v-if="form.errors.mail" class="form-error-field">{{form.errors.mail }}</div>
                    </div>
                    <div :class="{'form-error-div': form.errors.mailpro}">
                        <label for="mailpro">Mail professionel :</label>
                        <input type="email" id="mailpro" v-model="form.mailpro" />
                        <div v-if="form.errors.mailpro" class="form-error-field">{{form.errors.mailpro }}</div>
                    </div>
                    <Listbox as="div" v-model="form.selected">
                            <ListboxLabel class="block text-sm font-medium text-gray-700"> Role : </ListboxLabel>
                            <div class="relative mt-1">
                                <ListboxButton
                                    class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-safearea-blue focus:outline-none focus:ring-1 focus:ring-safeborder-safearea-blue sm:text-sm">
                                    <span class="flex items-center">
                                        <span v-if="selected" class="ml-1 block truncate">{{ selected.name }}</span>
                                        <span v-else class="ml-1 block truncate">My</span>
                                    </span>
                                    <span
                                        class="pointer-events-none absolute inset-y-0 right-0 ml-1 flex items-center pr-2">
                                        <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                                    </span>
                                </ListboxButton>
                                <transition leave-active-class="transition ease-in duration-100"
                                    leave-from-class="opacity-100" leave-to-class="opacity-0">
                                    <ListboxOptions
                                        class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                        <ListboxOption as="template" v-for=" role in props.roles " :key="role.id" :value="role"
                                            v-slot="{ active, selected }">
                                            <li
                                                :class="[active ? 'text-white bg-safearea-blue' : 'text-gray-900',  'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                <div class="flex items-center">

                                                    <span
                                                        :class="[selected ? 'font-semibold' : 'font-normal', 'ml-1 block truncate']">{{
                                                            role.name }}  
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
    </DashboardLayout>
</template>