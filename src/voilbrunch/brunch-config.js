// See http://brunch.io for documentation.
exports.files = {
  javascripts: {joinTo: 'app.js'},
  stylesheets: {joinTo: 'app.css'},
  templates: {joinTo: 'app.js'},
  plugins: {
      postcss: {
          processors: [
            require('lost')
          ]
      },
		sass: {
			options: {
					mode: 'native'
      	// Set the precision for arithmetic operations.
      	,	precision: 8
      	// To enable embedded source maps, pass the option `sourceMapEmbed`. This is only supported in _native_ mode; Ruby Sass isn't supported.
      	, sourceMapEmbed: true
			}
		}
	}
};
