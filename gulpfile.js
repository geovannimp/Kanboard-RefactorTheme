var gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var debug = require('gulp-debug-streams');

var dist = {
    css: './Asset/css/'
};

gulp.task('css', function() {
    gulp.src('./Asset/sass/*.sass')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(concat('refactorTheme.min.css'))
        .pipe(gulp.dest(dist.css));
});

gulp.task('default', ['css']);
