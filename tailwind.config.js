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
                'sangkolo-light': '#aeaeae',
                'sangkolo-mid': '#909090',
                'sangkolo-dark': '#5c5c5c',
                'sangkolo-black': '#383838',
            },
        },
    },

    plugins: [
        forms,
        aspectRatio, // <-- 2. Tambahkan plugin di sini
    ],
};