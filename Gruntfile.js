module.exports = function(grunt) {
    'use strict';
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        banner: '/**\n' +
            '* <%= pkg.name %>\n' +
            '* version: <%= pkg.version %>\n' +
            '* date: <%= grunt.template.today("dd-mm-yyyy") %>\n' +
            '*\n' +
            '* ©<%= grunt.template.today("yyyy") %> <%= pkg.author.name %>\n' +
            '* <%= pkg.author.email %> \n' +
            '*\n' +
            '* License: GNU GENERAL PUBLIC LICENSE v2\n' +
            '*/',

        usebanner: {
            build: {
                options: {
                    position: 'top',
                    banner: '<%= banner %>'
                },
                files: {
                    src: [ 'public/js/blog.min.js' ]
                }
            }
        },
        sass: {
            build: {
                options: {
                    loadPath: 'sass',
                    cacheLocation: 'cache/sass',
                    banner: '<%= banner %>'
                },
                files: {
                    'public/css/blog.css': 'src/sass/blog.scss'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-banner');

    grunt.registerTask('default', ['sass', 'usebanner']);
};