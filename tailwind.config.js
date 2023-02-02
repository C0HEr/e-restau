/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  content: ["./app/views/**/*.{html,php,twig}"],
  theme: {
    extend: {
      zIndex: {
        1: "1",
      },
      fontFamily: {
        'Josefin': ['Josefin Sans', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [],  
}