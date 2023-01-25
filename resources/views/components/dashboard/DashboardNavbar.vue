<template>
    <div>
        <TransitionRoot as="template" :show="sidebarOpen">
        <Dialog as="div" class="relative z-40 lg:hidden" @close="sidebarOpen = false">
            <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75" />
            </TransitionChild>

            <div class="fixed inset-0 z-40 flex">
            <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="-translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="-translate-x-full">
                <DialogPanel class="relative flex w-full max-w-xs flex-1 flex-col bg-gradient-to-b from-safearea-red to-safearea-blue">
                <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-300" leave-from="opacity-100" leave-to="opacity-0">
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button" class="ml-1 flex h-10 w-10 items-center justify-center rounded-full" @click="sidebarOpen = false">
                        <span class="sr-only">Close sidebar</span>
                        <XMarkIcon class="h-6 w-6 text-white" aria-hidden="true" />
                    </button>
                    </div>
                </TransitionChild>
                <div class="h-0 flex-1 overflow-y-auto pt-5 pb-4">
                    <div class="flex flex-shrink-0 items-center px-4">
                        <h1 class="text-white text-xl font-extrabold">Safe-Area</h1>
                    </div>
                    <nav class="mt-5 space-y-1 px-2">
                        <div v-for="item in navigation" :key="item.name">
                            <Link v-if="item.type === 'Link'" :href="route(item.href)" :class="[item.current ? 'bg-white text-black' : 'text-white hover:bg-safearea-grey', 'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md']" :aria-current="item.current ? 'page' : undefined">
                                <component :is="item.icon" :class="[item.current ? 'text-black' : 'text-white', 'mr-4 h-6 w-6 flex-shrink-0']" aria-hidden="true" />
                                {{ item.name }}
                            </Link>
                            <a v-else :href="route(item.href)" :class="[item.current ? 'bg-white text-black' : 'text-white hover:bg-safearea-grey', 'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md']" :aria-current="item.current ? 'page' : undefined">
                                <component :is="item.icon" :class="[item.current ? 'text-black' : 'text-white', 'mr-4 h-6 w-6 flex-shrink-0']" aria-hidden="true" />
                                {{ item.name }}
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                    <a href="#" class="group block flex-shrink-0">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-safearea-light-grey group-hover:text-white">{{ getUserName }}</p>
                            <p class="text-xs font-medium text-safearea-light-grey group-hover:text-white">View profile</p>
                        </div>
                    </div>
                    </a>
                </div>
                </DialogPanel>
            </TransitionChild>
            <div class="w-14 flex-shrink-0">
                <!-- Force sidebar to shrink to fit close icon -->
            </div>
            </div>
        </Dialog>
        </TransitionRoot>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex min-h-0 flex-1 flex-col bg-gradient-to-b from-safearea-red to-safearea-blue">
            <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
            <div class="flex flex-shrink-0 items-center px-4">
                <h1 class="text-white text-xl font-extrabold">Safe-Area</h1>
            </div>
            <nav class="mt-5 flex-1 space-y-1 px-2">
                <div v-for="item in navigation" :key="item.name">
                    <Link v-if="item.type === 'Link'" :href="route(item.href)" :class="[item.current ? 'bg-white text-black' : 'text-white hover:bg-safearea-grey', 'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md']" :aria-current="item.current ? 'page' : undefined">
                        <component :is="item.icon" :class="[item.current ? 'text-black' : 'text-white', 'mr-4 h-6 w-6 flex-shrink-0']" aria-hidden="true" />
                        {{ item.name }}
                    </Link>
                    <a v-else :href="route(item.href)" :class="[item.current ? 'bg-white text-black' : 'text-white hover:bg-safearea-grey', 'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md']" :aria-current="item.current ? 'page' : undefined">
                        <component :is="item.icon" :class="[item.current ? 'text-black' : 'text-white', 'mr-4 h-6 w-6 flex-shrink-0']" aria-hidden="true" />
                        {{ item.name }}
                    </a>
                </div>
            </nav>
            </div>
            <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                <Link :href="route('my.auth.dashboard.profil')" class="group block w-full flex-shrink-0">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-safearea-light-grey group-hover:text-white">{{ getUserName }}</p>
                            <p class="text-xs font-medium text-safearea-light-grey group-hover:text-white">View profile</p>
                        </div>
                    </div>
                </Link>
            </div>
        </div>
        </div>
        <div class="flex flex-1 flex-col lg:pl-64">
        <div class="sticky top-0 z-10 bg-gray-100 pl-1 pt-1 sm:pl-3 sm:pt-3 lg:hidden">
            <button type="button" class="-ml-0.5 -mt-0.5 inline-flex h-12 w-12 items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="sidebarOpen = true">
            <span class="sr-only">Open sidebar</span>
            <Bars3Icon class="h-6 w-6" aria-hidden="true" />
            </button>
        </div>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import {
    Dialog,
    DialogPanel,
    TransitionChild,
    TransitionRoot,
} from '@headlessui/vue';
import {
    ClockIcon,
    CreditCardIcon,
    DocumentChartBarIcon,
    HomeIcon,
    ScaleIcon,
    UserGroupIcon,
    XMarkIcon,
    Bars3Icon,
} from '@heroicons/vue/24/outline';

export default {
    components: {
        Link,
        Dialog,
        DialogPanel,
        TransitionChild,
        TransitionRoot,
        // Icons
        Bars3Icon,
        ClockIcon,
        CreditCardIcon,
        DocumentChartBarIcon,
        HomeIcon,
        ScaleIcon,
        UserGroupIcon,
        XMarkIcon,
    },
    data() {
        return {
            myNavigation: [
                // All my. routes will be type "Link" else it will be "a"
                { name: 'Home', href: 'my.auth.dashboard.index', icon: HomeIcon, current: true, type: "Link" },
                // { name: 'Helpdesk', href: 'my.helpdesk', icon: UserGroupIcon, current: false, type: "Link" },
                { name: 'Console', href: 'console.auth.dashboard.index', icon: UserGroupIcon, current: false, type: "a" },
                { name: 'Annuaire', href: 'my.auth.annuaire', icon: DocumentChartBarIcon, current: false, type: "Link" },
                { name: 'Retourner sur le site', href: 'no.public.homepage', icon: DocumentChartBarIcon, current: false, type: "a" },
            ],
            adminNavigation: [
                { name: 'ACTION ADMIN', href: 'my.auth.dashboard.index', icon: HomeIcon, current: false, type: "Link" },
            ],
            consoleNavigation: [
                // All console. routes will be type "Link" else it will be "a"
                { name: 'Home', href: 'console.auth.dashboard.index', icon: HomeIcon, current: true, type: "Link" },
                { name: 'My', href: 'my.auth.dashboard.index', icon: UserGroupIcon, current: false, type: "a" },
                { name: 'Retourner sur le site', href: 'no.public.homepage', icon: DocumentChartBarIcon, current: false, type: "a" },
            ],
            sidebarOpen: false,
        }
    },
    computed: {
        userPermission() {
            return this.$page.props.auth.user.permissions[0].name;
        },
        currentHost() {
            return window.location.host.slice(0, 8) === 'console.' ? 'console' : 'my';
        },
        navigation() {
            let nav = this.currentHost === 'console' ? this.consoleNavigation : this.myNavigation;
            if(this.currentHost === 'my' && (this.userPermission === 'admin_access' || this.userPermission === 'root')) {
                nav = nav.concat(this.adminNavigation);
            }
            return nav;
        },
        getUserName(){
            return this.$page.props.auth.user.firstname+' '+this.$page.props.auth.user.lastname;
        }
    },
};

</script>

<style lang="scss" scoped>

</style>
