const gulp = require('gulp');
     postcss = require('gulp-postcss'),
     tailwindcss = require('tailwindcss'),
     sass = require('gulp-sass')(require('sass'));
     //twig = require('gulp-twig');


gulp.task('css', () => {
    const processors = [
        tailwindcss,
    ];
    return gulp.src('./src/scss/*.css')
    .pipe(sass({ style: 'expanded' }))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(postcss(processors))
    .pipe(gulp.dest('./assets/css/'));
});

//gulp.task('twig', () => {
    //return gulp.src('./src/views/**/*.twig')
    //.pipe(twig())
    //.pipe(gulp.dest('./dest/app/'))
//});*/

// Watch task.
gulp.task('watch', () => {
    gulp.watch('./src/assets/scss/*.css',gulp.series('css'));
    //gulp.watch('./src/views/**/*.twig',gulp.series('twig'));
});

// Default Task
gulp.task('default', gulp.series('watch'));