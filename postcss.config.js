let cssnano = require('cssnano');
const isDevMode = require('./utils').isDevMode;


let postcssConfig = {
  plugins: [
    require('postcss-import'),
    require('tailwindcss/nesting'),
    require('tailwindcss'),
    require('autoprefixer'),
  ]
}

if( !isDevMode ) {
  postcssConfig.plugins.push(cssnano);
}

module.exports = postcssConfig;