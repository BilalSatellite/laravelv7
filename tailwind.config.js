function withOpacity(variableName) {
    return ({ opacityValue }) => {
      if (opacityValue !== undefined) {
        return `rgba(var(${variableName}), ${opacityValue})`
      }
      return `rgb(var(${variableName}))`
    }
  }
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
<<<<<<< HEAD
            textColor: {
                skin: {
                   /* Text var*/
                  body:withOpacity('--color-text-body'),
                  nav:withOpacity('--color-text-nav'),
                  sidebar:withOpacity('--color-text-sidebar'),
                  headline:withOpacity('--color-text-headline'),
                  titel:withOpacity('--color-text-titel'),
                  'sub-titel':withOpacity('--color-text-sub-titel'),
                  paragraph:withOpacity('--color-text-paragraph'),
                  btnprimary:withOpacity('--color-text-btnprimary'),
                  /* Hover Text var*/
                  'sidebarhover-link':withOpacity('--color-text-sidebarhover-link'),


                },
              },
              backgroundColor: {
                skin: {
                  /* Backgruond var*/
                  'body-fill': withOpacity('--color-body-fill'),
                  'sidebar-fill': withOpacity('--color-sidebar-fill'),
                  'navbar-fill': withOpacity('--color-navbar-fill'),
                  'contenthead-fill': withOpacity('--color-contenthead-fill'),
                  'contentbody-fill': withOpacity('--color-contentbody-fill'),
                  'btnprimary-fill': withOpacity('--color-btnprimary-fill'),
                  /* Hover Backgruond var*/
                  'sidebarhover-fill': withOpacity('--color-sidebarhover-fill'),


                },
              },
              colors: {
                'borderColor': withOpacity('--color-borderColor'),
=======
            colors: {
                'smil1': '#FFFFFF',
                'smil2': '#9EA7B2',
                'smil3': '#FEF2F2',
                'smid1': '#4B5563',
                'smid2': '#273444',
                'smid3': '#111827',
                'smid4': '#6B3333',
                'smibr': '#DC2626',
                
                
>>>>>>> 4e2f7f5a102a3a5e749d2f87937bd6997ceef0c5
              },


        },
       
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
