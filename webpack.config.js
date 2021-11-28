const path = require('path');
const isDevMode = require('./utils').isDevMode;

module.exports = {
    mode: isDevMode ? "development" : "production",
    entry: "./src/js/index.ts",
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
