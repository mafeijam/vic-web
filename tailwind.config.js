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
    typography: (theme) => ({
      default: {
        css: {
          maxWidth: 'none',
          strong: {
            fontWeight: '700'
          },
          'ul > li::before': {
            backgroundColor: theme('colors.gray.500')
          },
          h1: {
            color: theme('colors.gray.700')
          },
          h2: {
            color: theme('colors.gray.700')
          },
          h3: {
            color: theme('colors.gray.700')
          },
          h4: {
            color: theme('colors.gray.700')
          }
        }
      }
    })
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography')
  ],
}
