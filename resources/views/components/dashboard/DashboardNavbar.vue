<script setup>
import { computed } from 'vue';
import Dropdown from './partials/Dropdown.vue';
import DropdownLink from './partials/DropdownLink.vue';
import DropdownMenu from './partials/DropdownMenu.vue';
import { Link, usePage } from '@inertiajs/inertia-vue3';
import {Disclosure, DisclosureButton, DisclosurePanel} from "@headlessui/vue";
import {
    InformationCircleIcon,
    UserPlusIcon,
    EnvelopeIcon,
    HomeIcon,
    UsersIcon,
    Bars3Icon,
    XMarkIcon
} from "@heroicons/vue/24/outline";

const myNavigation = [
    {name: "Dashboard", href: "my.auth.dashboard.index"},
    {name: "Annuaire", href: "my.auth.users.list"},
    {name: "Plaintes", href: "my.auth.helpDesk.add"},
    {name: "Support", href: "my.auth.helpDesk.list"},
    {name: "Retourner sur le site", href: "no.public.homepage", as: "a"},
];
const adminNavigation = [
    {name: "Dashboard", href: "my.auth.dashboard.index"},
    {
        type: "dropdown",
        name: "Gestion utilisateurs",
        items: [
            { name: 'Annuaire', description: 'Liste des utilisateurs.', href: 'my.auth.users.list', icon: UsersIcon },
            { name: 'Ajouts', description: 'Ajouter un utilisateur.', href: 'my.auth.users.create', icon: UserPlusIcon }
        ]
    },
    {
        type: "dropdown",
        name: "Gestion des plaintes",
        items: [
            { name: 'Liste', description: 'Liste des plaintes.', href: 'my.auth.complains.list', icon: EnvelopeIcon }
        ]
    },
    {
        type: "dropdown",
        name: "Autres",
        items: [
            { name: 'Support', description: 'Liste des plaintes.', href: 'my.auth.helpDesk.list', icon: InformationCircleIcon },
            { name: 'Retourner sur le site', description: 'Liste des plaintes.', href: 'no.public.homepage', icon: HomeIcon, as: "a" }
        ]
    },
];
const consoleNavigation = [
    {name: "Dashboard", href: "console.auth.dashboard.index"},
    {name: "Retourner sur le site", href: "no.public.homepage", as: "a"},
];

const getUser = computed(() => usePage().props.value.auth.user);

const ifUserHasRole = (role) => getUser.value.roles.some((e) => e === role);

const getNavData = computed(() => {
    if (ifUserHasRole('root')) {
        return consoleNavigation;
    } else if (ifUserHasRole('admin')) {
        return adminNavigation;
    } else {
        return myNavigation;
    }
});
</script>

<template>
    <Disclosure as="nav" class="border-b border-gray-200 bg-white" v-slot="{ open }">
        <div class="mx-auto max-w-7xl px-4 md:px-6 lg:px-8">
            <div class="flex h-16 justify-between">
                <div class="flex items-center">
                    <Link :href="route('my.auth.dashboard.index')" class="flex flex-row items-center gap-4 font-bold">
                        <img src="../../../../resources/images/logo.webp" class="w-10" alt="Logo">Safe Area
                    </Link>
                    <div class="hidden lg:ml-10 lg:flex lg:space-x-8">
                        <template v-for="item in getNavData" :key="item.name">
                            <Link
                                v-if="item.type !== 'dropdown' && item.as !== 'a'"
                                :href="route(item.href)" as="a"
                                :class="[{'menu-active-item': route().current() === item.href}, 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 border-b-2 py-3 border-solid text-sm font-medium']"
                                :aria-current="item.current ? 'page' : undefined">
                                {{ item.name }}
                            </Link>
                            <a v-else-if="item.type !== 'dropdown'" :href="route(item.href)" :class="[{'menu-active-item': route().current() === item.href}, 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 border-b-2 py-3 border-solid text-sm font-medium']" :aria-current="item.current ? 'page' : undefined">
                                {{ item.name }}
                            </a>
                            <DropdownMenu v-else :title="item.name" :items="item.items" />
                        </template>
                    </div>
                </div>
                <div class="hidden lg:ml-6 lg:flex lg:items-center">
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <Dropdown align="right" width="48">
                            <template #trigger>
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-normal rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ getUser.lastname }} {{ getUser.firstname }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </template>

                            <template #content>
                                <DropdownLink :href="route((ifUserHasRole('root') ? 'console.' : 'my.') + 'auth.profil.show')">
                                    Profil
                                </DropdownLink>
                                <DropdownLink :href="route('no.public.logout')" as="a">
                                    Déconnexion
                                </DropdownLink>
                            </template>
                        </Dropdown>
                    </div>
                </div>
                <div class="-mr-2 flex items-center lg:hidden">
                    <!-- Mobile menu button -->
                    <DisclosureButton
                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                        <span class="sr-only">Ouvrir le menu principal</span>
                        <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
                        <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
                    </DisclosureButton>
                </div>
            </div>
        </div>

        <DisclosurePanel class="block lg:hidden">
            <div class="space-y-1 pt-2 pb-3">
                <template v-for="item in getNavData" :key="item.name">
                    <DisclosureButton
                        v-if="item.type !== 'dropdown'" as="a" :href="route(item.href)"
                        :class="[{'menu-active-item': route().current() === item.href}, 'border-transparent border-solid border-l-4 text-gray-700 block pl-3 pr-4 py-2 text-sm font-medium']"
                        :aria-current="item.current ? 'page' : undefined">{{ item.name }}
                    </DisclosureButton>
                    <template v-else v-for="subItem in item.items" :key="subItem.name">
                        <DisclosureButton
                            as="a" :href="route(subItem.href)"
                            :class="[{'menu-active-item': route().current() === subItem.href}, 'border-transparent border-solid border-l-4 text-gray-700 block pl-3 pr-4 py-2 text-sm font-medium']"
                            :aria-current="subItem.current ? 'page' : undefined">{{ subItem.name }}
                        </DisclosureButton>
                    </template>
                </template>
            </div>
            <div class="border-y border-gray-300 border-solid py-3 space-y-1">
                <DisclosureButton
                    as="a" :href="route('no.public.logout')"
                    class="block px-4 py-2 text-sm font-medium text-gray-800">
                    Deconnexion
                </DisclosureButton>
                <DisclosureButton
                    as="a" :href="route('my.auth.profil.show')"
                    class="block px-4 py-2">
                    <div class="text-sm font-medium text-gray-800">{{ getUser.lastname }} {{ getUser.firstname }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ getUser.personal_email }}</div>
                </DisclosureButton>
            </div>
        </DisclosurePanel>
    </Disclosure>
</template>

<style lang="scss" scoped>
    .menu-active-item {
        @apply border-safearea-red text-gray-900;
    }
</style>
