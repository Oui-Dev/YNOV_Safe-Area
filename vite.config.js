import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/scss/landing.scss',
                'resources/js/app.js',
                'resources/js/inertia.js',
                'resources/js/landing/alpine.min.js',
            ],
            refresh: true,
        }),
    ],
});
