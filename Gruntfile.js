module.exports = function (grunt) {

    var js_src_files = [
        'assets/js/*.js'
    ];

    // Project configuration.
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),


        // within grunt.initConfig
        concat: {
            options: {
                separator: ';\n',
                mangle: false
            },
            dist: {
                src: js_src_files,
                dest: 'dist/js/app.js'
            }
        },

        uglify: {
            options: {
                banner: '\n',
                mangle: true
            },
            build: {
                src: js_src_files,
                dest: 'dist/js/app.min.js'
            }
        },

        less: {
            dev: {
                options: {
                    paths: ["assets/css"],
                    compress: false
                },
                files: {
                    "dist/css/main.css": "assets/less/main.less"
                }
            },
            build: {
                options: {
                    paths: ["assets/css"],

                    modifyVars: {
                        imgPath: '"dist/images/"',
                        bgColor: 'red'
                    },
                    compress: true
                },
                files: {
                    "dist/css/main.min.css": "assets/less/main.less"
                }
            }
        },

        watch: {
            options: {
                dateFormat: function (time) {
                    grunt.log.writeln('Finished watching in ' + time + ' ms at' + (new Date()).toString());
                    grunt.log.writeln('Waiting...');
                },
                livereload: true

            },
            scripts: {
                files: 'assets/js/*.js',
                tasks: ['concurrent:compress']
            },

            css: {
                files: 'assets/*/*.less',
                tasks: ['concurrent:compress']
            }
        },

        concurrent: {
            compress: ['less', 'concat', 'uglify'],
            start: {
                tasks: ['watch'],
                options: {
                    logConcurrentOutput: true
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');

    // Default task(s).
    grunt.registerTask('default', ['concurrent']);
};



