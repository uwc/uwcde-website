// ==== WATCH ==== //

var gulp = require( 'gulp' ),
  config = require( '../../gulpconfig' ).watch;

// Watch (BrowserSync version): build stuff when source files are modified, let BrowserSync figure out when to reload
// Task chain: build -> browsersync -> watch
gulp.task( 'watch', [ 'browsersync' ], function () {
  gulp.watch( config.src.styles, [ 'styles' ] );
  gulp.watch( config.src.images, [ 'images' ] );
  gulp.watch( config.src.theme, [ 'theme' ] );
} );
