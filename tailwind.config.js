import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                roboto:["Roboto Condensed", "sans-serif"],
                asul:["Asul", "sans-serif"],
                merri:["Merriweather", "sans-serif"],
                lex: ["Lexend", "sans-serif"]

            },
        },
    },
    plugins: [],
};