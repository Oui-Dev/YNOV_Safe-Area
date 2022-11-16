import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import {ZiggyVue} from "ziggy";
import {Ziggy} from "./ziggy";

// Cookie consent
import { cc } from "./cc";

InertiaProgress.init()

createInertiaApp({
    resolve: async (name) => {
        const comps = import.meta.glob('../views/pages/**/*.vue');
        const match = comps[`../views/pages/${name}.vue`];
        const page = (await match()).default;
        return page;
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy);

        app.config.globalProperties.$cc = cc;
        app.mount(el);
    },
});