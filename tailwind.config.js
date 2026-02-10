/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/**/*.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./node_modules/flowbite/**/*.js",  // ← AÑADIR ESTA LÍNEA
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('flowbite/plugin'),  // ← AÑADIR ESTE PLUGIN
    ],
    darkMode: 'class',  // ← Si usas modo oscuro
}
