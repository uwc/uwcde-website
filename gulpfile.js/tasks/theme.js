// ==== THEME ==== //

var gulp        = require('gulp')
  , gutil       = require('gulp-util')
  , phpcbf      = require('gulp-phpcbf')
  , sort        = require('gulp-sort')
  , plugins     = require('gulp-load-plugins')({ camelize: true })
  , config      = require('../../gulpconfig').theme
;

// Copy Advanced Custom Fields PRO files to the `build` folder
gulp.task('theme-acf', function() {
  return gulp.src(config.acf.src)
  .pipe(plugins.changed(config.acf.dest))
  .pipe(gulp.dest(config.acf.dest));
});

// Copy readme file to the `build` folder
gulp.task('theme-readme', function() {
  return gulp.src(config.readme.src)
  .pipe(plugins.changed(config.readme.dest))
  .pipe(gulp.dest(config.readme.dest));
});

// Lint theme php files with phpcbf, then copy to the `build` folder
gulp.task('theme-php', function () {
  return gulp.src(config.php.src)
  .pipe(phpcbf({
    bin: config.php.bin
  , standard: config.php.standard
  , warningSeverity: config.php.warning
  }))
  .on('error', gutil.log)
  .pipe(gulp.dest(config.php.dest));
});


// All the theme tasks in one
gulp.task('theme', ['theme-php', 'theme-readme', 'theme-acf']);
