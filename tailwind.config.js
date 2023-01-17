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
        "main": "#A2C89B",
        "secondary": "#6EC1E4",
        "main-light": "#f5f5f5",
        "dark": "#222425",
        "dark-medium": "#414141",
        "main-dark": "#212529",
        "gray": "#A1A1A1",
      },
    },
  },
  plugins: [],
}
