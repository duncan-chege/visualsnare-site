/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        blue: "1F9FAF",
        "light-blue": "rgba(15, 148, 174, 0.25)",
        "dark-blue": "#125666",
        orange: "F37A21",
        "light-orange": "rgba(242, 185, 128, 1)",
        white: "#ffffff"
      }
    },
  },
  plugins: [],
}

