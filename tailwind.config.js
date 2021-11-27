const colors = require('tailwindcss/colors');
const defaultTheme = require('tailwindcss/defaultTheme');
const isDevMode = require('./utils').isDevMode;


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


let tailwindConfig = {
  purge: [
    './template-parts/**/*.php',
    './*.php',
  ],
  darkMode: false,
  variants: {
    extend: {},
  },
  plugins: [],
}

if( isDevMode ) {
  tailwindConfig.theme = minified_theme_settings
}

module.exports = tailwindConfig;
