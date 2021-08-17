const colors = require('tailwindcss/colors');
const defaultTheme = require('tailwindcss/defaultTheme');

const minified_theme_settings = {
  colors: {
    transparent: 'transparent',
    current: 'currentColor',

    black: colors.black,
    white: colors.white,
    gray: colors.coolGray,
    red: colors.red,
    yellow: colors.amber,
    blue: colors.blue,
  },
  screens: {
    'sm': defaultTheme.screens.sm,
    'md': defaultTheme.screens.md,
    'lg': defaultTheme.screens.lg,
  },
  extend: {},
}


module.exports = {
  purge: [
    './template-parts/**/*.php',
    './*.php',
  ],
  darkMode: false,
  theme: minified_theme_settings,  // comment out when building?
  variants: {
    extend: {},
  },
  plugins: [],
}
