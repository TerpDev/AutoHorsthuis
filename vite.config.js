import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,}),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
    build: {
        assetsInlineLimit: 0,
    },
    base: '/', // Ensure all asset URLs are root-relative
});
