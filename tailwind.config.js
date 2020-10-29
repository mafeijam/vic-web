const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [
    './resources/views/**/*.blade.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Noto Sans HK', 'Noto Sans SC', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {},
  plugins: [],
}
