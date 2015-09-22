module.exports = function(grunt) {
    grunt.initConfig({

        watch: {
                files: ['scss/**/*.scss'], // which files to watch
                tasks: ['sass'],
                options: {
                    nospawn: true
                }
        },

        sass: {
            dist: {
                options: {
                    style: 'nested'
                },
                files: {
                    "css/skeleton.css": "scss/skeleton.scss",
                    "css/custom.css": "scss/custom.scss"
                }
            }
        },

        browserSync: {
        dev: {
            bsFiles: {
                src : [ 'css/*.css',
                        '*.html'
                      ]
            },
            options: {
                watchTask: true,
                proxy: "sass.dev"
            }
        }
    }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    grunt.registerTask('default', ['browserSync', 'watch']);
};
