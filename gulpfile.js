// Include Gulp.
var gulp = require('gulp');

// Include Plugins.
var sass         = require('gulp-sass');
var scsslint     = require('gulp-scss-lint');
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS    = require('gulp-minify-css');

var jshint       = require('gulp-jshint');
var uglify       = require('gulp-uglify');
var concat       = require('gulp-concat');

// Define the path to the assets.
var assets = 'assets';

gulp.task('sass-css', function() {
    return gulp.src(assets + '/scss/*.scss')
        .pipe(sass({errLogToConsole: true}))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))

        .pipe(minifyCSS())
        .pipe(gulp.dest(assets + '/css'));
});

// Lint the Sass.
gulp.task('scss-lint', function() {
  gulp.src(assets + '/scss/*.scss')
    .pipe(scsslint({
        'config': 'scss-lint.yml'
    }));
});

// Lint JS
gulp.task('lintjs', function() {
  return gulp.src(assets + '/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// Uglify JS
gulp.task('compress-js', function() {
  gulp.src(assets + '/js/*.js')
    .pipe(uglify())
    .pipe(concat('all.js'))
    .pipe(gulp.dest(assets + '/js/min'));
});

// Watch files for changes.
gulp.task('watch', function() {
    gulp.watch(assets + '/scss/*.scss', ['sass-css']);
    gulp.watch(assets + '/scss/**/*.scss', ['sass-css']);
    gulp.watch(assets + '/scss/pages/*.scss', ['sass-css']);
    gulp.watch(assets + '/scss/*.scss', ['scss-lint']);
    gulp.watch(assets + '/scss/**/*.scss', ['scss-lint']);
    gulp.watch(assets + '/js/*.js', ['lintjs']);
    gulp.watch(assets + '/js/*.js', ['compress-js']);
});

// Default Task
gulp.task('default', ['sass-css', 'scss-lint', 'lintjs', 'compress-js', 'watch']);