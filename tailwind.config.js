import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"
    ],
    theme: {
        extend: {},
        container: {
            center: true,
            padding: '2rem',
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};
