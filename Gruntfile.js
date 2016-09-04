"use strict";

module.exports = function(grunt) {
  
  require("load-grunt-tasks")(grunt);

  grunt.initConfig({
    copy: {
      build: {
        files: [{
          expand: true,
          cwd: "src",
          src: [
            "fonts/**/*.{woff,woff2}",
            "img/**",
            "js/**",
            "*.html",
            "*.php"
          ],
          dest: "build"
        }]
      },
      html: {
        files: [{
          expand: true,
          cwd: "src",
          src: ["*.html"],
          dest: "build"
        }]
      },
      php: {
        files: [{
          expand: true,
          cwd: "src",
          src: ["*.php"],
          dest: "build"
        }]
      }
    },
    
    clean: {
      build: ["build"]
    },
    
    less: {
      style: {
        files: {
          "build/css/style.css": "src/less/style.less"
        }
      }
    },

    postcss: {
      style: {
        options: {
          processors: [
            require("autoprefixer")({browsers: [
              "last 1 version",
              "last 2 Chrome versions",
              "last 2 Firefox versions",
              "last 2 Opera versions",
              "last 2 Edge versions"
            ]})
          ]
        },
        src: "build/css/*.css"
      }
    },
    
    csso: {
      style: {
        options: {
          report: "gzip"
        },
        files: {
          "build/css/style.min.css": ["build/css/style.css"]
        }
      }
    },
    
    svgstore: {
      options: {
        svg: {
          style: "display: none"
        }
      },
      symbols: {
        files: {
          "build/img/symbols.svg": ["src/img/*.svg"]
        }
      }
    },
    
    svgmin: {
      symbols: {
        files: [{
          expand: true,
          src: ["build/img/*.svg"]
        }]
      }
    },
    
    imagemin: {
      images: {
        options: {
          optimizationLevel: 3
        },
        files: [{
          expand: true,
          src: ["build/img/**/*.{png,jpg,gif}"]
        }]
      }
    },
    
    php: {
        dist: {
            options: {
                hostname: '127.0.0.1',
                port: 9000,
                base: 'build', // Project root 
                keepalive: false,
                open: false
            }
        }
    },

    browserSync: {
      server: {
        bsFiles: {
          src: [
            "*.html",
            "*.php",
            "css/*.css"
          ]
        },
        options: {
          server: "build",
          watchTask: true,
          notify: false,
          open: true,
          ui: false
        }
      }
    },

    watch: {
      html: {
        files: ["src/*.html"],
        tasks: ["copy:html"]
      },
      php: {
        files: ["src/*.php"],
        tasks: ["copy:php"]
      },
      style: {
        files: ["src/less/**/*.less"],
        tasks: ["less", "postcss", "csso"],
        options: {
          spawn: false
        }
      }
    }
  });

  grunt.registerTask("serve", ["php:dist", "browserSync", "watch"]);
  grunt.registerTask("symbols", ["svgmin", "svgstore"]);
  grunt.registerTask("build", [
    "clean",
    "copy",
    "less",
    "postcss",
    "csso",
    "symbols",
    "imagemin"
  ]);
};
