/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  content: ["./app/**/*.{html,php}"],
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