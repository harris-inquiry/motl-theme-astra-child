let cssnano = require('cssnano');

const isDevMode = process.env.NODE_ENV !== 'production';

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