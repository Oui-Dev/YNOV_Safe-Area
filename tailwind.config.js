/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "safearea-blue": "var(--colors-blue)",
                "safearea-red": "var(--colors-red)",
                "safearea-green": "var(--colors-green)",
                "safearea-grey": "var(--colors-grey)",
                "safearea-light-grey": "var(--colors-light-grey)",
            },
        },
    },
    // plugins: [require("@tailwindcss/forms")],
};
