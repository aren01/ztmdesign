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
    ],
    theme: {
        extend: {
            fontFamily: {
                "dancing-script": ['"Dancing Script"', "cursive"],
                poppins: ['"Poppins"', "sans-serif"],
            },
        },
        plugins: [require("daisyui")],
    },
};
