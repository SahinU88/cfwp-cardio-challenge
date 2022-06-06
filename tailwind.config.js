const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'cfwp-green': '#a9a78e',
                'cfwp-green-accent': '#322f14',
                'cfwp-purple': '#a8a1c2',
                'cfwp-purple-accent': '#aa0e0f',
                'cfwp-yellow': '#faf4aa',
                'cfwp-yellow-accent': '#0b2038',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms')
    ],
};
