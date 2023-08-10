module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily: {
      'roboto' : ['Roboto', 'sans-serif'],
    },
    extend: {
      colors: {
        dasarataBlue: '#0B4B93',
        dasarataPastel: '#049BBE',
        dasarataDarkBlue: '#072D58',
        dasarataDarkBlue2: '#041E3B',
        dasarataSidebar: '#F6F7FB',
        dasarataHover: '#056299'
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require("tw-elements/dist/plugin.cjs")
  ],
  variants: {
    extend: {}
  }
}