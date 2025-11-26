/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
    "./components/**/*.{ts,tsx}",
    "./emails/**/*.{ts,tsx}",
  ],
  theme: {
    extend: {
        fontFamily: {
        public : ['Public Sans', "sans-serif"]

      },
    },
  },
  plugins: [],
}
