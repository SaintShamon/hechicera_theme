"use strict";

const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const prefix = require('gulp-autoprefixer');
const cssnano = require('gulp-cssnano');
const rename = require('gulp-rename');
const webpack = require('webpack');
const webpackStream = require('webpack-stream');
const browserSync = require('browser-sync');
const babel = require('gulp-babel');
const plumber = require("gulp-plumber");
const server = browserSync.create();

//env variables
const themeName = 'hechicera';

function compileCss() {
  return gulp
    // .src("wp-content/themes/" + themeName + "/sass/screen.sass")
    .src("./" + themeName + "/sass/screen.sass")
    .pipe(sass().on('error', sass.logError))
    .pipe(cssnano())
    .pipe(concat('main.css'))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(prefix('last 2 versions'))
    // .pipe(gulp.dest("wp-content/themes/" + themeName + "/dist"))
    .pipe(gulp.dest("./" + themeName + "/dist"))
    .pipe(server.stream());
};

function compileJs() {
  // return gulp.src('./wp-content/themes/' + themeName + '/js/main.js')
  return gulp.src('./' + themeName + '/js/main.js')
    .pipe(webpackStream({
      output: {
        filename: "main.min.js",
      },
      module: {
        rules: [{
          test: /\.(js|jsx)$/,
          exclude: /(node_modules)/,
          loader: "babel-loader",
          query: {
            presets: ["@babel/preset-env"],
          },
        }, ],
      },
    }), webpack)
    // .pipe(gulp.dest('wp-content/themes/' + themeName + '/dist'));
    .pipe(gulp.dest('./' + themeName + '/dist'));

}

function compileVendorCss() {
  // return gulp.src('wp-content/themes/' + themeName + '/assets/styles/libs/*.css')
  return gulp.src('./' + themeName + '/assets/styles/libs/*.css')
    .pipe(concat('vendors.min.css'))
    // .pipe(gulp.dest('wp-content/themes/' + themeName + '/dist'));
    .pipe(gulp.dest('./' + themeName + '/dist'));
}

function compileVendorJs() {
  // return gulp.src('wp-content/themes/' + themeName + '/js/vendors/*.js')
  return gulp.src('./' + themeName + '/js/vendors/*.js')
    .pipe(concat('vendors.min.js'))
    // .pipe(gulp.dest('wp-content/themes/' + themeName + '/dist'));
    .pipe(gulp.dest('./' + themeName + '/dist'));
}

function watchFiles() {
  // gulp.watch('wp-content/themes/' + themeName + '/sass/**/*.sass', compileCss);
  // gulp.watch('wp-content/themes/' + themeName + '/js/**/*.js', compileJs);
  // gulp.watch('wp-content/themes/' + themeName + '/**/*.php').on('change', server.reload);
  gulp.watch('./' + themeName + '/sass/**/*.sass', compileCss);
  gulp.watch('./' + themeName + '/js/**/*.js', compileJs);
  // gulp.watch('/**/*.php').on('change', server.reload);
}

const build = gulp.series(compileCss, compileJs, watchFiles);
const watch = gulp.parallel(watchFiles);

// export tasks
exports.compileCss = compileCss;
exports.compileJs = compileJs;
exports.compileVendorJs = compileVendorJs;
exports.compileVendorCss = compileVendorCss;
exports.watch = watchFiles;
exports.build = build;
exports.default = build;