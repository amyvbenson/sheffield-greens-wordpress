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
          'style.css': 'styles/styles.scss',
          'ie8.css': 'styles/styles-ie8.scss'
        }
        
      }
    },

    autoprefixer: {
      dist: {
        files: {
          'style.css': 'style.css'
        }
      }
    },

    watch: {
      sass: {
        files: 'styles/**/*.scss',
        tasks: ['sass:dev', 'autoprefixer']
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-autoprefixer');

  grunt.registerTask('default', ['sass:dev', 'autoprefixer']);
  grunt.registerTask('dist', ['sass:dist', 'autoprefixer']);

};