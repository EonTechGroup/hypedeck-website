/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Red Hat Display', 'sans-serif'],
            },
            colors: {
                'custom-gradient-start': '#012F6A',
                'custom-gradient-end': '#1764DF',
            },
        },
    },
    plugins: [],
}
