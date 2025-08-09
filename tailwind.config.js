import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import aspectRatio from '@tailwindcss/aspect-ratio'; // <-- 1. Tambahkan import ini

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'sangkolo-light': '#D7D7D7',
                'sangkolo-mid': '#FE7743',
                'sangkolo-dark': '#447D9B',
                'sangkolo-black': '#273F4F',
                'sangkolo-white': '#FAF9F6',
            },
        },
    },

    plugins: [
        forms,
        aspectRatio, // <-- 2. Tambahkan plugin di sini
    ],
};