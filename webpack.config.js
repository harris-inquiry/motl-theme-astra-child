const path = require('path');
const isDevMode = require('./utils').isDevMode;

module.exports = {
    mode: isDevMode ? "development" : "production",
    entry: {
      archive: "./src/js/archive.ts",
      product: "./src/js/product.ts"
    },
    output: {
        path: path.resolve(__dirname, 'build/js'),
        filename: "[name].js"
    },
    module: {
      rules: [
        {
          test: /\.ts$/,
          use: 'ts-loader',
        }
      ]
    }
};
