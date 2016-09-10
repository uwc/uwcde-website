// ==== STYLES ==== //

var gulp          = require('gulp')
  , plumber       = require('gulp-plumber')
  , gutil         = require('gulp-util')
  , plugins       = require('gulp-load-plugins')({ camelize: true })
  , config        = require('../../gulpconfig').styles
;

// Build stylesheets from source Sass files, post-process, and write source maps (for debugging) with libsass
gulp.task('styles', function() {
  return gulp.src(config.build.src)
  .pipe(plumber())
  .pipe(plugins.sourcemaps.init()) // Note that sourcemaps need to be initialized with libsass
  .pipe(plugins.sass(config.libsass))
  .pipe(plugins.cssnano(config.cssnano))
  .pipe(plugins.sourcemaps.write('./'))
  .pipe(gulp.dest(config.build.dest));
});
