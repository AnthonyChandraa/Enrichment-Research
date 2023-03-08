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
            'binus-blue' : '#0693e3',
            'binus-dark-blue' : '#2a6496',
            'binus-darker-blue' : '#015581',
            'binus-orange' : '#f39f33',
            'binus-dark-orange' : '#f18700'
        }
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}
