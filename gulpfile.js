var gulp           = require('gulp'),
    autoprefixer   = require('gulp-autoprefixer'),
    minifycss      = require('gulp-uglifycss'),
    uglify         = require('gulp-uglify'),
    rename         = require('gulp-rename'),
    sass           = require('gulp-sass'),
    plumber        = require('gulp-plumber'),
    notify         = require('gulp-notify'),
    streamqueue    = require('streamqueue'),
    importCss      = require('gulp-import-css'),
    sourcemaps     = require('gulp-sourcemaps'),
    gulpif         = require('gulp-if'),
    concat         = require('gulp-concat'),


    productionMode = false;


gulp.task('default', ['watch']);


gulp.task('styles', function () {

    gulp.task('styles', function () {
        return gulp.src('./src/css/style.scss')
            .pipe(plumber({
                errorHandler: notify.onError("Error: <%= error.message %>")
            }))
            .pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(autoprefixer({
                browsers: ['last 5 versions'],
                cascade: false
            }))
            .pipe(importCss())
            .pipe(rename({suffix: '.min'}))
            .pipe(gulpif(productionMode, minifycss()))
            .pipe(gulp.dest('./build/css'))
            .pipe(notify("Styles task complete"));
    });

});

gulp.task('vendorsJs', function() {
    return streamqueue({ objectMode: true },
        gulp.src('./src/js/vendor/jquery/*.js'),
        gulp.src('./src/js/vendor/TweenMax.min.js'),
        //gulp.src('./src/js/vendor/bootstrap.js'),
        gulp.src('./src/js/vendor/collapse.js')
    )

        .pipe(concat('vendors.js'))
        .pipe(gulpif(productionMode, uglify()))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('./build/js'))
        .pipe(notify("Vendor script task complete"));
});


gulp.task('scriptsJs', function() {
    return streamqueue({ objectMode: true },
        gulp.src('./src/js/custom/custom.js')
    )

        .pipe(concat('custom.js'))
        .pipe(gulpif(productionMode, uglify()))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('./build/js'))
        .pipe(notify("Custom script task complete"))
});


gulp.task('watch', ['styles', 'vendorsJs', 'scriptsJs'], function() {
    gulp.watch('src/css/**/*.scss', ['styles']);
    gulp.watch('src/js/vendor/*.js', ['vendorJs']);
    gulp.watch('src/js/custom/*.js', ['scriptsJs']);
});