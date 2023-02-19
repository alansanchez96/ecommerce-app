const defaultTheme = require('tailwindcss/defaultTheme');

const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    experimental: {
        applyComplexClasses: true,
    },
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                trueGray: colors.neutral,   // trueGray cambio a: neutral
                orange: colors.orange,
                greenLime: colors.lime,
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio')
    ],
};
