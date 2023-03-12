// vite.config.js

import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    server: {
        https: true, // enable HTTPS
    },
    plugins: [
        laravel({
            input: [
                "resources/css/test.css",
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
        react(),
    ],
});
