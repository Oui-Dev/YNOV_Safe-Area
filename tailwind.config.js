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
            purple: colors.purple,
            indigo: colors.indigo,
            orange: colors.orange,
            pink: colors.pink,
            transparent: "transparent",
            current: "currentColor",
        },
        extend: {},
    },
    plugins: [require("@tailwindcss/forms")],
};
