var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('styles', function(){
    gulp.src('css/main.css')
        .pipe(autoprefixer())
        .pipe(gulp.dest('build'))
});