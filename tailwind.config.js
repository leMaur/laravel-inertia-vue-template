let defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
      colors: {
        brand: {
          ...defaultTheme.colors.blue
        },
      },
    },
    customForms: theme => ({
      default: {
        'input, textarea, checkbox, radio, select, multiselect': {
          borderColor: theme('colors.gray.400'),
        },
      },
    }),
  },
  variants: {
    margin: ['responsive', 'focus'],
    rounded: ['focus'],
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
  ]
}
