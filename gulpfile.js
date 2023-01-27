const gulp = require('gulp');
const postcss = require('gulp-postcss');
const tailwindcss = require('tailwindcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sass = require('gulp-sass')(require('sass'));

gulp.task('css', function() {
    const processors = [
        tailwindcss,
    ];
    return gulp.src('./src/scss/*.css')
    .pipe(sass({ style: 'expanded' }))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(postcss(processors))
    //.pipe(rename({suffix: '.min'}))
	//.pipe(minifycss())
    .pipe(gulp.dest('./dist/css/'));
});