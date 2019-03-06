var gulp            = require('gulp');
//less-css
var browserSync     = require('browser-sync');
var less            = require('gulp-less');
var cssmin          = require('gulp-minify-css');
var autoprefixer    = require('gulp-autoprefixer');
var rename          = require('gulp-rename');

var uglify          = require('gulp-uglify');
var concat 			= require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

var copy            = require('gulp-contrib-copy');

//images
var imagemin        = require('gulp-imagemin');
var cache           = require('gulp-cache');

//cleaning
var clear           = require('del');
var cache           = require('gulp-cache');

//Sequence
var runSequence = require('run-sequence');





// path
var PUBLIC_DIR = './../host/www.crossfood.od.ua/wp-content/themes/crossfood/';
var path = {
    js :  'dev/src/js/' ,
    less    :  'dev/src/css/' ,
    css     :  'dev/src/css',
    fonts   :  'src/fonts/**/*.*',
    vendors :  'vendors/**/*.*',
    img     :  'dev/src/img/**/*.*',
    css_prod: 'src/css',
    js_prod:  'src/js',
    img_prod: 'src/img'
};

//dev

//Поднятие сервера

gulp.task('browserSync', function () {
   browserSync({
       server: {
           baseDir: './'
       }
   });
});


gulp.task('less', function(){
    return gulp.src([path.less + 'style.less'/*, path.less + 'less/fonts.less'*/])
        .pipe(less()) // используем gulp-less
        .pipe(autoprefixer())
        .pipe(cssmin({keepSpecialComments : 0}))
        .pipe(gulp.dest(path.css))
        .pipe(gulp.dest(PUBLIC_DIR + path.css_prod))
        .pipe(gulp.dest(PUBLIC_DIR));
});

gulp.task('scripts', function(){
    return gulp.src([
        '!dev/src/js/compiled/main.js',
        'node_modules/slick-carousel/slick/slick.min.js',
        // path.js + 'bootstrap.js',
        // path.js + 'jquery.touchSwipe.min.js',
        path.js + 'masked-input-plugin.js',
        path.js + 'main.js'
    ])
        .pipe(concat('main.js'))
        .pipe(gulp.dest(path.js + 'compiled/'))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(PUBLIC_DIR + path.js_prod));
});

gulp.task('html', function() {
    return gulp.src('./index.html')
        .pipe(copy())
        .pipe(gulp.dest(PUBLIC_DIR));
});

gulp.task('fonts', function() {
    return gulp.src(path.fonts)
        .pipe(copy())
        .pipe(gulp.dest(PUBLIC_DIR+'src/fonts'));
});

gulp.task('bower', function() {
    return gulp.src('bower_components/**/*.*')
        .pipe(copy())
        .pipe(gulp.dest(PUBLIC_DIR+'bower_components'));
});

gulp.task('img', function() {
    return gulp.src(path.img)
        .pipe(imagemin())
        .pipe(gulp.dest(PUBLIC_DIR + path.img_prod));
});

gulp.task('clean:public', function(){
    clear(['./../public/**/*'],{force: true});
});

gulp.task('clean:cache', function(done){
    return cache.clearAll(done);
});



// Watchers
gulp.task(
    'default',

    function(callback){

        runSequence(
            // 'clean:cache',
            [
                // 'browserSync',
                'less',
                'scripts',
                'img'
            ],
            callback
        );

        gulp.watch(path.less + '**/*.*', ['less']);
        gulp.watch(path.js + '**/*.js', ['scripts']);
        // gulp.watch('*.html', browserSync.reload);
    }
);

// gulp.task(
//     'build',
//
//     function(callback){
//
//         runSequence(
//             'clean:public',
//             'clean:cache',
//             [
//
//                 'less',
//                 'scripts',
//                 'fonts',
//                 'img',
//                 'html',
//                 'bower'
//             ],
//             callback
//         );
//     }
// );

