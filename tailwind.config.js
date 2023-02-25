/** @type {import('tailwindcss').Config} */
module.exports = {
    purge: [
        "./resources/**/*.blade.php",

        "./resources/**/*.js",

        "./resources/**/*.vue",
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                "dancing-script": ['"Dancing Script"', "cursive"],
                poppins: ['"Poppins"', "sans-serif"],
            },
        },
        plugins: [
            require("daisyui"),
            require("tw-elements/dist/plugin"),
            require("flowbite/plugin"),
        ],
    },
};
