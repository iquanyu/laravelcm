const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
          transparent: 'transparent',
          current: 'currentColor',
          black: colors.black,
          white: colors.white,
          gray: colors.trueGray,
          red: colors.red,
          blue: colors.sky,
          yellow: colors.amber,
          orange: colors.orange,
          amber: colors.amber,
          lime: colors.lime,
          green: colors.green,
          emerald: colors.emerald,
          teal: colors.teal,
          sky: colors.sky,
          indigo: colors.indigo,
          purple: colors.purple,
          pink: colors.pink,
          rose: colors.rose,
          primary: '#F97316',
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
