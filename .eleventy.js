module.exports = function(eleventyConfig) {
  return {
    dir: {
      input: "src/php",
      includes: "includes",
      output: "build/php"
    }, 
    HTMLTemplateEngine: "ejs",
  }
}