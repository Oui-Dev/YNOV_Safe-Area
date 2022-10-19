const colors = require("tailwindcss/colors");
/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            "safearea-blue": "#3F459D",
            "safearea-red": "#A7296E",
            "safearea-green": "#0F6E3C",
            blue: colors.blue,
            red: colors.red,
            green: colors.green,
            black: colors.black,
            white: colors.white,
            yellow: colors.yellow,
            gray: colors.gray,
            transparent: "transparent",
            current: "currentColor",
            indigo: {
                100: "#e6e8ff",
                300: "#b2b7ff",
                400: "#7886d7",
                500: "#6574cd",
                600: "#5661b3",
                800: "#2f365f",
                900: "#191e38",
            },
        },
        extend: {},
    },
    plugins: [require("@tailwindcss/forms")],
};
