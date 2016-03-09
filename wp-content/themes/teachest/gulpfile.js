'use strict';

var gulp = require('gulp');
var clean = require('gulp-rimraf');
var sass = require('gulp-sass');
var rename = require("gulp-rename");
var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

// Setup paths
var paths = {
  scripts: [
    './src/vendor/jquery/jquery-2.2.1.js',
    './src/vendor/bootstrap/javascripts/bootstrap.js',
    './src/js/teachest.js'
  ]
};

// Cleanup Tasks
gulp.task('clean', function () {
  return gulp.src(['./dist'], { read: false })
    .pipe(clean());
});

// Compile Tasks
gulp.task('sass', ['clean'], function () {
  return gulp.src('./src/scss/teachest.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./dist/css'))
});

gulp.task('minify-css', ['sass'], function() {
  return gulp.src('./dist/css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./dist/css'));
});

gulp.task('copy', ['copyFonts','copyBootstrapFonts','copyImages']);

gulp.task('copyFonts', ['clean'], function() {
  return gulp.src('./src/fonts/*')
    .pipe(gulp.dest('./dist/fonts/'))
});

gulp.task('copyBootstrapFonts', ['clean'], function() {
  return gulp.src('./src/vendor/bootstrap/fonts/bootstrap/*')
    .pipe(gulp.dest('./dist/fonts/bootstrap/'))
});

gulp.task('copyImages', ['clean'], function() {
  return gulp.src('./src/img/*')
    .pipe(gulp.dest('./dist/img/'))
});

gulp.task('scripts', ['clean'], function() {
  return gulp.src(paths.scripts)
    .pipe(sourcemaps.init())
      .pipe(uglify())
      .pipe(concat('all.min.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./dist/js'));
});

// Rerun the task when a file changes
gulp.task('watch', function() {
  gulp.watch(paths.scripts, ['default']);
  gulp.watch('./src/scss/teachest.scss', ['default']);
});

gulp.task('default', ['clean', 'sass', 'minify-css', 'scripts', 'copy']);
