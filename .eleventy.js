module.exports = function(eleventyConfig) {
  eleventyConfig.addPassthroughCopy("admin");

  return {
    passthroughFileCopy: true,
    dir: {
      includes: "_includes",
      layout: "_layouts",
      output: "_site"
    }
  };
};
