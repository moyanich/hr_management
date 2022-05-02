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
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    daisyui: {
        themes: [
            {
                mytheme: {
                    "primary": "#1d4ed8",
                    "secondary": "#bfdbfe",
                    "accent": "#18182F",
                    "neutral": "#18182F",
                    "base-100": "#FFFFFF",
                    "info": "#3b82f6",
                    "success": "#22c55e",
                    "warning": "#FBBD23",
                    "error": "#dc2626",
                },
            },
        ],
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui'),
    ],
};
