/** @type {import('tailwindcss').Config} */
import daisyui from "daisyui"

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'green-primary': '#1db753'
      },
    },
  },
  plugins: [
    daisyui,
  ],
  daisyui: {
    themes: ["forest"], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
  },

}