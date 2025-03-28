import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/intl-tel-input.css",
                "resources/js/intl-tel-input.js",
                "resources/css/landing.css",
                "resources/css/aos.css",
                "resources/js/aos.js",
            ],
            refresh: [`resources/views/**/*`],
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
});
