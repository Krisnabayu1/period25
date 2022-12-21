const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
      fontFamily: {
        'sans': ['ui-sans-serif', 'system-ui'],
        'serif': ['ui-serif', 'Georgia'],
        'mono': ['ui-monospace', 'SFMono-Regular'],
        'display': ['Oswald'],
        'body': ['"Open Sans"']
      },
        container:{
          center:true,
          padding:'16px',
        },
        extend: {
          screens: {
            '2xl':'1320px',
          }
        },
      },
    variants: {
      extend: {
        display: ['group-focus'],
        opacity: ['group-focus'],
        inset: ['group-focus']
      },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
