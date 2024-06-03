/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontSize: {
        "2xs": ".625rem", //10px
      }
    },
  },
  plugins: [],
}

