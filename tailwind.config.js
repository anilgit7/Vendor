import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

const plugin = require('tailwindcss/plugin')
/** @type {import('tailwindcss').Config} */
export default {
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
            screens: {
                '3xs': '220px',
                '2xs': '300px',
                'xs': '480px',
            },
        },
    },

    plugins: [
        forms,typography,
        plugin(function ({ addUtilities }) {
            addUtilities({
              '.scrollbar-hide': {
                /* IE and Edge */
                '-ms-overflow-style': 'none',
      
                /* Firefox */
                'scrollbar-width': 'none',
      
                /* Safari and Chrome */
                '&::-webkit-scrollbar': {
                  display: 'none'
                }
              }
            })
        })
    ],
};
