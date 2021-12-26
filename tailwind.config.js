const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
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
                'col1': '#eeebdc',
                'col2': '#F4E185', 
                'col3' : '#F3950D',
                'col4' : '#CD1818',
                'col5' : '#0F2C67'
              },

        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
