var gulp = require('gulp'),
    watch = require('gulp-watch'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    cssvars = require('postcss-simple-vars'),
    cssnested = require('postcss-nested');

gulp.task('default', function() {
    console.log("default task");
});

gulp.task('php', function() {
    return gulp.src('./app/public/wp-content/themes/spectrumbox-theme/**/*.php')
        .pipe(gulp.dest('./app/public/wp-content/themes/spectrumbox-theme-temp'));

    gulp.task('css', function() {
        return gulp.src('./app/public/wp-content/themes/spectrumbox-theme/style.css')
            .pipe(postcss([cssvars, cssnested, autoprefixer]))
            .pipe(gulp.dest('./app/public/wp-content/themes/spectrumbox-theme-temp/styles'));
    });
});

gulp.task('watch', function() {

    watch('./app/public/wp-content/themes/spectrumbox-theme/**/*.php', function() {
        gulp.start('php');
    });

    watch('./app/public/wp-content/themes/spectrumbox-theme/**/*.css', function() {
        gulp.start('css');
    });
});