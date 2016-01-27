module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      options: {
          sourceMap: true
      },
      dist: {
          files: {
              'style.css': 'styles/styles.scss'
          }
      }
    },

    watch: {
      sass: {
        files: 'styles/**/*.scss',
        tasks: ['sass'],
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['sass']);

};