// подключение пакетов

const gulp = require('gulp');
const browserSync = require('browser-sync').create();


// Задачи для gulp
gulp.task('server', function () {
    // модуль для включения локального хоста
    browserSync.init({
        server: {baseDir: './src/'}
    });

    // слежение за файлами
    gulp.watch('src/**/*.html').on('change', browserSync.reload);
    gulp.watch('src/css/**/*.css').on('change', browserSync.reload);
    gulp.watch('src/js/**/*.js').on('change', browserSync.reload);
});

gulp.task('default' ['server']);