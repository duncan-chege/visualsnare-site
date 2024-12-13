/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        grey: "#3B3F42",
        "light-grey": "#F2F2F2",
        orange: "#F37900",
        white: "#ffffff"
      }
    },
  },
  plugins: [],
}

