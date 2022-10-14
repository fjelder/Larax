const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");
/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", "Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.sky,
                secondary: colors.orange,
                neutral: colors.gray,
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
