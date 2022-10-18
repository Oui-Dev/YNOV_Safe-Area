import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/scss/landing/app.scss',
                'resources/scss/crm/app.scss',
                'resources/js/crm/app.js',
                'resources/js/app.js',
                'resources/js/landing/alpine.min.js',
                'resources/js/inertia.js',
            ],
            refresh: true,
        }),
    ],
});
