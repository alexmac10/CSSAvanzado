const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const pug = require('gulp-pug');
const rename = require('gulp-rename');


const server = browserSync.create();

gulp.task('sass', () => {
    gulp.src('./dev/scss/style.scss')
            .pipe(sass({
                outputStyle: 'compressed'
            }))
            .pipe(gulp.dest('./public/css'))
            .pipe(server.stream({match: '**/*.css'}));
});

gulp.task('pug', () => {
    gulp.src('./dev/pug/pages/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({
                extname: '.php'
            }))
            .pipe(gulp.dest('./public/'));
});

gulp.task('default', () => {
    server.init({
        proxy: 'http://localhost/PruebasCSS/public/index.php'
    });
    gulp.watch('./dev/pug/**/*.pug', ['pug', server.reload]);
    gulp.watch('./dev/scss/**/*.scss', ['sass']);
});


