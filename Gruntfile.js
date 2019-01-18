// Gruntfile.js

// our wrapper function (required by grunt and its plugins)
// all configuration goes inside this function
module.exports = function(grunt) {

// ===========================================================================
// CONFIGURE GRUNT ===========================================================
// ===========================================================================
	grunt.initConfig({

		// get the configuration info from package.json ----------------------------
		// this way we can use things like name and version (pkg.name)
		pkg: grunt.file.readJSON('package.json'),

		// configure sass for styling sheet -----------------------------------
		sass: {
			// this is the "dev" Sass config used with "grunt watch" command
			dev: {
				options: {
					outputStyle: 'compressed',
					// nested, expanded, compact, compressed
					sourceMap: true,
					// tell Sass to look in the Bootstrap stylesheets directory when compiling
					loadPath: ['src/sass', 'demo/src/sass']
				},
				files: {
					// the first path is the output and the second is the input
					'assets/css/sandstrap.min.css': 'src/sass/style.scss',
					'demo/assets/css/demo.css': 'demo/src/sass/style-demo.scss'
				}
			},
		},

		autoprefixer: {
			dist: {
				options: {
					map: true,
					browsers: ['last 2 versions', 'ie 8', 'ie 9']
				},
				files: {
					'assets/css/sandstrap.min.css':'assets/css/sandstrap.min.css',
					'demo/assets/css/demo.css':'demo/assets/css/demo.css'
				}
			}
		},

		uglify: {
		    production: {
		    	options: {
			        sourceMap: false,
			        sourceMapName: 'src/js/sourcemap.map'
		    	},
		      	files: {
		        	'assets/js/sandstrap.min.js': 'assets/js/sandstrap.js',
		    	},
		    },
		},

		babel: {
			options: {
				sourceMap: true,
				presets: ['@babel/preset-env']
			},
			dist: {
				files: {
					'assets/js/sandstrap.js': 'src/js/**/*.js'
				}
			}
		},

		// configure the "grunt watch" task -----------------------------------
		watch: {
			javascript: {
		        files: 'src/**/*.js',
		        tasks: ['babel', 'uglify:production']
		    },
		 	scripts: {
		 		files: ['src/**/*.scss', 'demo/**/*.scss'],
		 		tasks: ['sass:dev', 'autoprefixer']
		 	}
		}
	});

	grunt.registerTask('default', ['watch']);
	// ===========================================================================
	// LOAD GRUNT PLUGINS ========================================================
	// ===========================================================================
	// we can only load these if they are in our package.json
	// make sure you have run npm install so our app can find these
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-babel');
};