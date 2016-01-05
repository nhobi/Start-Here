module.exports = function(grunt) {
    require('jit-grunt')(grunt); // required for grunt-less
    
    grunt.initConfig({
        less: {
            development: {
                options: {
                    compress: false,
                    yuicompress: false,
                    optimization: 2
                },
                files: {
                    "style.css" : "_less/_import.less",
                }
            }
        },
        
        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer-core')({browsers: 'last 20 versions'}) // Uses browserlist queries
                ]
            },
            dist: {
                src: 'style.css'
            }
        },
        
        watch: {
            options: {
                livereload: false,
            },
            template: {
                files: [ '/' ],
            },
            less: {
                files: [ '**/*.less' ], // which files to watch
                tasks: [ 'less'],
            },
            postcss: {
                files: ['**/*.less'],
                tasks: 'postcss:dist'
            }
        }
    });
    
    grunt.registerTask('default', ['less', 'postcss:dist', 'watch']);
};
