// vite.config.js

import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    // server: {
    //     https: true,
    // },
    plugins: [
        laravel({
            input: ["resources/js/app.js"],
            refresh: true,
            https: true, // Add this line to force HTTPS
        }),
        react(),
    ],
    build: {
        manifest: true,
    },
});
