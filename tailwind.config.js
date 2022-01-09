const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'smil1': '#FFFFFF',
                'smil2': '#9EA7B2',
                'smil3': '#FEF2F2',
                'smid1': '#4B5563',
                'smid2': '#273444',
                'smid3': '#111827',
                'smid4': '#6B3333',
                'smibr': '#DC2626',
                
                
              },


        },
       
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
