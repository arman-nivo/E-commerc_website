import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    base: "/",
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true, // hide deprecated @import warnings from node_modules
            },
        },
    },
});
