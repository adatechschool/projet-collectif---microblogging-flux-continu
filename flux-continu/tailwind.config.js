const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{html,js}'
    ],

    theme: {
         colors: {
            'violet': '#B4418E',
            'magenta': '#D94A8C',
            'rouge': '#EA515F',
            'orange': '#FE7434',
            'jaune': '#FEA802'
        },
        fontFamily: {
            sans: ['Graphik', 'sans-serif'],
            serif: ['Merriweather', 'serif'],
        }

    },

    plugins: [require('@tailwindcss/forms')],
};
