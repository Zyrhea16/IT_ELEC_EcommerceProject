/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/filament/**/*.blade.php",
    "./app/Filament/**/*.php",
    "node_modules/preline/dist/*.js",
  ],
  darkMode: 'class',
  theme: {
    extend: {},
  },
  plugins: [],
}