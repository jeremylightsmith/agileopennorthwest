//Gruntfile
module.exports = function(grunt) {

  //Initializing the configuration object
  grunt.initConfig({

    // Task configuration
    concat: {
      options: {
        separator: ';',
      },
      js: {
        src: [
          './bower_components/jquery/jquery.js',
          './bower_components/bootstrap/dist/js/bootstrap.js',
          './js/aonw.js'
        ],
        dest: './public/js/aonw.js',
      }
    },
    less: {
      development: {
        options: {
          compress: true,
        },
        files: {
          "./public/css/aonw.min.css":"./less/aonw.less"
        }
      }
    },
    uglify: {
      options: {
        mangle: false  // Use if you want the names of your functions and variables unchanged
      },
      aonw: {
        files: {
          './public/js/aonw.js': './public/js/aonw.js',
        }
      }
    },
    watch: {
      js: {
        files: [
          './bower_components/jquery/jquery.js',
          './bower_components/bootstrap/dist/js/bootstrap.js',
          './js/*.js'
          ],   
        tasks: ['concat','uglify'], 
        options: {
          livereload: true
        }
      },
      less: {
        files: ['./app/assets/stylesheets/*.less'],
        tasks: ['less'],
        options: {
          livereload: true
        }
      },
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Task definition
  grunt.registerTask('default', ['less', 'concat', 'uglify', 'watch']);
};
