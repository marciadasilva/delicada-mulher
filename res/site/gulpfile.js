var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    less = require('gulp-less'),
    LessPluginCleanCSS = require('less-plugin-clean-css'),
    cleancss = new LessPluginCleanCSS({ advanced: true });


gulp.task('default',['sass','less','js','watch']);

gulp.task('sass', function () {
    return gulp.src('src/sass/**/*.scss')
        .pipe(concat('delicada.min.css'))
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('css'));
});

gulp.task('js', function() {
    return gulp.src('src/js/**/*.js')
        .pipe(concat('efeitos.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js'));
});

gulp.task('watch', function() {
    gulp.watch('src/sass/**/*.scss',['sass']);
    gulp.watch('src/js/**/*.js',['js']);
    gulp.watch('src/less/**/*.less',['less']);
});

// só para verificar erros
// o lint não ta nos default, por isso quando quiser utilizar, rodar gulp lint
gulp.task('lint', function() {
    return gulp.src('src/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter(stylish));
});

gulp.task('less', function() {
    return gulp.src('src/less/**/*.less')
        .pipe(concat('styleLess.min.css'))
        .pipe(less())
        .pipe(gulp.dest('css'));
});