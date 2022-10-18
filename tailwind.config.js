const colors = require("tailwindcss/colors");
/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./assets/**/*.js",
  ],
  darkMode: false,
  theme: {
  },
  plugins: [
    require("tailgrids/plugin"),
    require('@tailwindcss/forms'),
    require("flowbite/plugin"),
  ],
}
