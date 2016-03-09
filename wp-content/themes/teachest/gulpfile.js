'use strict';

var gulp = require('gulp');
var clean = require('gulp-rimraf');
var sass = require('gulp-sass');
var rename = require("gulp-rename");
var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');

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

gulp.task('copy', ['copyFonts', 'copyImages', 'copyJs']);

gulp.task('copyFonts', ['clean'], function() {
  return gulp.src('./src/fonts/*')
    .pipe(gulp.dest('./dist/fonts/'))
});

gulp.task('copyImages', ['clean'], function() {
  return gulp.src('./src/img/*')
    .pipe(gulp.dest('./dist/img/'))
});

gulp.task('copyJs', ['clean'], function() {
  return gulp.src('./src/js/*')
    .pipe(gulp.dest('./dist/js/'))
});


gulp.task('default', ['clean', 'sass', 'minify-css', 'copy']);
