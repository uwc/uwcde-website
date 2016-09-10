// ==== CONFIGURATION ==== //

// Project paths
var project     = 'uwc-website'           // The directory name for the theme.
  , src         = './src/'                // The raw material of the theme: custom scripts, SCSS source files, PHP files, images, etc.; do not delete this folder!
  , build       = './build/'              // A temporary directory containing a development version of your theme; delete it anytime.
  , dist        = './dist/'               // The distribution package that you'll be uploading to your server; delete it anytime.
  , assets      = './assets/'             // A staging area for assets that require processing before landing in the source folder (example: icons before being added to a sprite sheet)
  , bower       = './bower_components/'   // Bower packages
  , composer    = './vendor/'             // Composer packages
  , modules     = './node_modules/'       // npm packages
;

// Project settings
module.exports = {

  browsersync: {
    files: [build+'/**', '!'+build+'/**.map'] // Exclude map files
  , port: 5000 // Port number for the live version of the site; default: 3000
  , proxy: 'nc-website/' // We need to use a proxy instead of the built-in server because WordPress has to do some server-side rendering for the theme to work
  , notify: false // In-line notifications (the blocks of text saying whether you are connected to the BrowserSync server or not)
  , ui: false // Set to false if you don't need the browsersync UI
  , open: false // Set to false if you don't like the browser window opening automatically
  , watchOptions: {
      debounceDelay: 2000 // This introduces a small delay when watching for file change events to avoid triggering too many reloads
    }
  },

  watch: { // What to watch before triggering each specified task; if files matching the patterns below change it will trigger BrowserSync or Livereload
    src: {
      styles:       src+'scss/**/*.scss'
    , images:       src+'**/*(*.png|*.jpg|*.jpeg|*.gif|*.svg)'
    , theme:        src+'**/*.php'
    }
  },

  images: {
    build: { // Copies images from `src` to `build`; does not optimize
      src: src+'**/*(*.png|*.jpg|*.jpeg|*.gif|*.svg)'
    , dest: build
    }
  , dist: {
      src: [dist+'**/*(*.png|*.jpg|*.jpeg|*.gif|*.svg)', '!'+dist+'screenshot.png'] // The source is actually `dist` since we are minifying images in place
    , imagemin: {
        optimizationLevel: 7
      , progressive: true
      , interlaced: true
      }
    , dest: dist
    }
  },

  styles: {
    build: {
      src: src+'scss/**/*.scss'
    , dest: build
    }
  , compiler: 'libsass' // Choose a Sass compiler: 'libsass' or 'rubysass'
  , cssnano: {
      autoprefixer: {
        add: true
      , browsers: ['> 3%', 'last 2 versions', 'ie 9', 'ios 6', 'android 4'] // This tool is magic and you should use it in all your projects :)
      }
    }
  , libsass: { // Requires the libsass implementation of Sass (included in this package)
      includePaths: ['./src/scss', bower, modules] // Adds Bower and npm directories to the load path so you can @import directly
    , precision: 6
    , onError: function(err) {
        return console.log(err);
      }
    }
  },

  theme: {
    php: {
      src: [src+'/**/*.php', !src+'/vendor/**/*.*']
    , dest: build
    , bin: 'phpcbf'
    , standard: 'WordPress-Core'
    , warning: '0'
    }
  , readme: {
      src: src+'readme.*' // This simply copies the readme file over.
    , dest: build
    }
  , acf: {
      src: src+'acf-json/**/*'
    , dest: build+'acf-json/'
    }
  },

  utils: {
    clean: [build+'**/.DS_Store'] // A glob pattern matching junk files to clean out of `build`; feel free to add to this array
  , wipe: [dist] // Clean this out before creating a new distribution copy
  , dist: {
      src: [build+'**/*', '!'+build+'**/*.map']
    , dest: dist
    }
  }
}
