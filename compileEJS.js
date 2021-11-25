const fs = require('fs');
const ejs = require("ejs");


class CLI {
    static get_filename() {
        return process.argv.at(-1);
    }
}

console.log(CLI.get_filename());

