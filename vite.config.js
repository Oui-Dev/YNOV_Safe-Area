import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

const path = require("path");

export default defineConfig({
    resolve:{
        alias:{
            ziggy: path.resolve("vendor/tightenco/ziggy/dist/vue.es"),
        },
    },
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/js/inertia.js',
            ],
            refresh: true,
        }),
    ],
});
