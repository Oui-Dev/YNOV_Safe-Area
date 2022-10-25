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
            "safearea-blue": "var(--colors-blue)",
            "safearea-red": "var(--colors-red)",
            "safearea-green": "var(--colors-green)",
            "safearea-grey": "var(--colors-grey)",
            white: colors.white,
            black: colors.black,
            blue: colors.blue,
            red: colors.red,
            green: colors.green,
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
    // plugins: [require("@tailwindcss/forms")],
};
