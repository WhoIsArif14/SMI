import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        // Pastikan ini mencakup view admin Anda
        // Contoh: Jika admin views ada di resources/views/admin/
        './resources/views/admin/**/*.blade.php',
        './resources/views/layouts/*.blade.php', // Jika Anda punya layout admin di sini
    ],
    theme: {
        extend: {},
    },
    plugins: [require('@tailwindcss/forms')],
};
