var gulp = require('gulp'), // Подключаем Gulp
    sass = require('gulp-sass'), //Подключаем Sass пакет,
    browserSync = require('browser-sync'), // Подключаем Browser Sync
    concat = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
    uglify = require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
    rename = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
    del = require('del'), // Подключаем библиотеку для удаления файлов и папок
    imagemin = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
    pngquant = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
    cache = require('gulp-cache'), // Подключаем библиотеку кеширования
    sourcemaps = require('gulp-sourcemaps'),
    rimraf = require('rimraf');

    var postcss = require('gulp-postcss');

    var autoprefixer = require('autoprefixer');
    var cssnano = require('cssnano');
    var pxtorem = require('postcss-pxtorem');
    var short = require('postcss-short');
    var stylefmt = require('stylefmt');
    var assets  = require('postcss-assets');
    var shortspacing = require('postcss-short-spacing');

gulp.task('css-libs', function() { 
    var processors = [
        cssnano
    ]
    return gulp.src([
            'app/libs/normalize-css/normalize.css',
            'app/libs/owl/owl-carousel/owl.carousel.css',
            'app/libs/owl/owl-carousel/owl.theme.css',
            'app/libs/owl/owl-carousel/owl.transitions.css',
        ]) // Берем источник
        .pipe(postcss(processors))
        .pipe(concat('libs.min.css'))
        .pipe(gulp.dest('css')) 
        .pipe(browserSync.reload({
            stream: true
        })) 
});

gulp.task('js-libs', function() {
    return gulp.src([ // Берем все необходимые библиотеки
            'app/libs/jquery/dist/jquery.min.js'
        ])
        .pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest('js')); // Выгружаем в папку app/js
});

gulp.task('sass', function() { // Создаем таск Sass
    var processors = [
        assets,
        short,
        autoprefixer(['last 5 versions', '> 5%', 'ie 8', 'ie 7'], {
            cascade: true
        }),
        pxtorem({
            rootValue: 14,
            replace: false
        }),
        stylefmt,
        cssnano
    ];
    return gulp.src('app/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss(processors))
        .pipe(rename({
            suffix: ".min",
            extname: ".css"
        }))
        .pipe(sourcemaps.write('.', { sourceRoot: 'css-source' }))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('browser-sync', function() { 
    browserSync({ 
        proxy: {
            target: 'artcraft.loc'
        },
        ghostMode: {
            clicks: true,
            forms: true,
            scroll: true
        },
        notify: false 
    });
});

gulp.task('img', function() {
    return gulp.src('app/img/**/*')
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            svgoPlugins: [{
                removeViewBox: false
            }],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('img'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('compress', ['clean'], function() {
  return gulp.src('app/js/*.js')
    .pipe(sourcemaps.init())
    .pipe(concat('script.js'))
    .pipe(rename({
        suffix: ".min",
        extname: ".js"
    }))
    .pipe(uglify())
    .pipe(sourcemaps.write('', { sourceRoot: 'js-source' }))
    .pipe(gulp.dest('js'));

});

gulp.task("clean", function (cb) {
    rimraf('./js/script.min.js', cb);
});

gulp.task('watch', ['browser-sync'],  function() {
    gulp.watch('app/img/**/*', ['img']);
    gulp.watch('app/sass/**/*.scss', ['sass']);
    // gulp.watch('./**/*.php', browserSync.reload);
    gulp.watch('app/js/*', function() {
       gulp.run('compress');
  }, browserSync.reload); // Наблюдение за JS файлами в папке js
});

gulp.task('build', ['img', 'sass', 'scripts'], function() {

    var buildCss = gulp.src([ // Переносим библиотеки в продакшен
            'app/css/main.css',
            'app/css/libs.min.css'
        ])
        .pipe(gulp.dest('css'))

    var buildFonts = gulp.src('app/fonts/**/*') // Переносим шрифты в продакшен
        .pipe(gulp.dest('fonts'))

    var buildJs = gulp.src('app/js/**/*') // Переносим скрипты в продакшен
        .pipe(gulp.dest('js'))

});

gulp.task('clear', function(callback) {
    return cache.clearAll();
});
gulp.task('default', ['watch']);
