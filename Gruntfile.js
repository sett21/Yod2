module.exports = function(grunt) {
  grunt.initConfig({
    concat: {
      dist: {
        src: ['themes/front/css/*.css'],
        dest: 'themes/front/css/dist/style.all.css'
      }
    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        rebase: false,
        keepSpecialComments: 0,
        roundingPrecision: -1
      },
      target: {
        files: {
          'themes/front/css/dist/style.min.css' : ['themes/front/css/dist/style.all.css']
        }
      }
    },

    watch: {
          scripts: {
              files: ['themes/front/css/*.css', '!themes/front/css/dist/style.all.css', '!themes/front/css/dist/style.min.css'],
              tasks: ['concat','cssmin'],
              options: {
                  spawn: false
              }
          }
    },

  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['concat','cssmin','watch']);

};