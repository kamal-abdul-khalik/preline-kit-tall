import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "node_modules/preline/dist/*.js",
    ],
    darkMode: "class",
    theme: {
        container: {
            center: true,
        },
        extend: {
            colors: {
                transparent: "transparent",
                black: colors.black,
                white: colors.white,
                secondary: colors.gray,
                info: colors.cyan,
                success: colors.green,
                primary: colors.blue,
                danger: colors.red,
                warning: colors.yellow,
            },
            fontFamily: {
                sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, require("preline/plugin")],
};
