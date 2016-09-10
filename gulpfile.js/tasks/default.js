// ==== DEFAULT ==== //

var gulp = require('gulp');

// Default task chain: build -> (livereload or browsersync) -> watch
gulp.task('default', ['watch']);

// One-off setup tasks
gulp.task('setup', ['utils-normalize']);

// Build a working copy of the theme
gulp.task('build', ['styles', 'theme']);
