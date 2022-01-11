const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            height: {
                'h-100': '30rem',
                'h-101': '31rem',
                'h-102': '32rem',
                'h-103': '33rem',
                'h-104': '34rem',
                'h-105': '35rem',
                'h-110': '40rem',
                'h-120': '50rem',
            },
            backgroundImage: {
                'header-bg': "url('/img/header-bg.jpg')",
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            container: {
                center: true,
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-textshadow'),
        require('tailwindcss-textshadow'),
        require('@tailwindcss/line-clamp'),
    ],
};
