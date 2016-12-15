var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');


//development

gulp.task('browserSync', function() {
   browserSync.init({
    injectChanges: true,
    proxy: 'localhost:8888'
  });
})

gulp.task('sass', function(){
  return gulp.src
    ('assets/scss/*.scss')
    // Initializes sourcemaps
    .pipe(sourcemaps.init())
    .pipe(sass({
      errLogToConsole: true
      })) // Converts Sass to CSS with gulp-sass
    .pipe(sourcemaps.write())
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest('dist'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

//scripts
gulp.task('scripts', function() {
  gulp.src('assets/js/*.js')
  .pipe(uglify())
  .pipe(gulp.dest('dist/js'));
})

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

// Watch  folder for changes
gulp.task('watch', function (){
  gulp.watch('assets/scss/*.scss', ['sass']);
  gulp.watch('*.php', browserSync.reload);
  gulp.watch('assets/js/**/*.js', browserSync.reload);
});


//optimization

//images
gulp.task('images', function(){
  return gulp.src('assets/images/**/*.+(png|jpg|gif|svg)')
  .pipe(cache(imagemin({
    interlaced: true
  })))
  .pipe(gulp.dest('images'))
});

// Basic Gulp task syntax
gulp.task('default', ['scripts', 'sass', 'watch', 'browserSync']);

gulp.task('clean:dist', function() {
  return del.sync('dist');
})
