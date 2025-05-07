// tailwind.config.js
module.exports = {
    content: [
      "./public/**/*.php",  // Scan semua file PHP di folder public
      "./public/*.php"      // Scan file PHP di root public
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }