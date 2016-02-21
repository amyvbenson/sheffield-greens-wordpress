module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dev: {
        options: {
          sourcemap: 'auto',
          style: 'expanded'
        },
        files: {
          'style.css': 'styles/styles.scss',
          'ie8.css': 'styles/styles-ie8.scss'
        }
        
      },
      dist: {
        options: {
          sourcemap: 'none',
          style: 'compressed'
        },
        files: {
          'style.css': 'styles/styles.scss'
        }
        
      }
    },

    watch: {
      sass: {
        files: 'styles/**/*.scss',
        tasks: ['sass:dev']
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['sass:dev']);
  grunt.registerTask('dist', ['sass:dist']);

};