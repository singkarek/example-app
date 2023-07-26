module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        dasarataBlue: '#0B4B93',
        dasarataPastel: '#049BBE',
        dasarataDarkBlue: '#072D58',
        dasarataDarkBlue2: '#041E3B',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
  variants: {
    extend: {}
  }
}