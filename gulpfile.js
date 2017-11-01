var gulp = require('gulp'),
	runSequence = require('run-sequence'),
	del = require('del'),
	sass = require('gulp-sass'),
	changed = require('gulp-changed'),
	cssnao = require('gulp-cssnano'),
	uglify = require('gulp-uglify'),
	htmlBeautify = require('gulp-html-beautify'),
	imagemin = require('gulp-imagemin'),
	plumber = require('gulp-plumber'),
	convertEncoding  = require('gulp-convert-encoding'),
	rename = require('gulp-rename');
	watch = require('gulp-watch');
	wait = require('gulp-wait');
	
var browserSync = require('browser-sync').create();

var options = {outPath: './build/',inPath : './src'};

var supported = [
		'Android >= 2.3',
		'BlackBerry >= 7',
		'Chrome >= 9',
		'Firefox >= 2',
		'Explorer >= 8',
		'iOS >= 5',
		'Opera >= 11',
		'Safari >= 5',
		'ChromeAndroid >= 9',
		'FirefoxAndroid >= 4',
		'ExplorerMobile >= 9'
	];

gulp.task('default', function(cb){
	runSequence(
		['build'], 
		['server'], 
		['watcher'], 
		cb
	);
});

gulp.task('watcher', function(){
	watch(options.inPath + '/*.html', function(){
		gulp.start('html');
	});
	watch(options.inPath + '/assets/sass/**/*.scss', function(){
		gulp.start('sass');
	});
	watch(options.inPath + '/assets/js/**/*.js', function(){
		gulp.start('js');
	});
	watch(options.inPath + '/assets/img/**/*{jpg,jpeg,png,gif,svg,ico}', function(){
		gulp.start('img');
	});
	watch(options.inPath + '/medias/**/*{jpg,jpeg,png,gif,svg}', function(){
		gulp.start('medias');
	});
	watch(options.inPath + '/assets/fonts/*{ttf,otf,eot,woff,woff2,svg}', function(){
		gulp.start('fonts');
	});
	
	gulp.watch(options.outPath + '/**/*').on('change', function(done){
		browserSync.reload();
	});
});

gulp.task('server', function(){
	return browserSync.init({
        server: {
            baseDir: options.outPath,
            directory: true
        },
		localOnly: true, 
		reloadOnRestart: true,
		port: 8080,
        open: true,
        notify: false
    });
});

gulp.task('build', function(cb){
	return runSequence(
		['clean'],
		['html', 'sass', 'js', 'img', 'medias', 'fonts'], 
		cb
	);
});

gulp.task('clean', function(){
	return del(options.outPath);
});

gulp.task('html', function(){
	return gulp.src(options.inPath + '/*.html')
	.pipe(changed(options.outPath))
	.pipe(convertEncoding({to:'utf-8'}))
	.pipe(htmlBeautify())
	.pipe(gulp.dest(options.outPath));
});

gulp.task('fonts', function(){
	return gulp.src(options.inPath + '/assets/fonts/**/*{ttf,otf,eot,woff,woff2,svg}')
	.pipe(changed(options.outPath + '/assets/fonts'))
	.pipe(gulp.dest(options.outPath + '/assets/fonts'));
});

gulp.task('medias', function(){
	return gulp.src(options.inPath + '/medias/**/*{jpg,jpeg,png,gif,svg}')
	.pipe(changed(options.outPath + '/medias'))
	.pipe(gulp.dest(options.outPath + '/medias'));
});

gulp.task('img', function(){
	return gulp.src(options.inPath + '/assets/img/**/*{jpg,jpeg,png,gif,svg,ico}')
	.pipe(changed(options.outPath + '/assets/img'))
	.pipe(gulp.dest(options.outPath + '/assets/img'));
});

gulp.task('js', function(){
	gulp.src(options.inPath + '/assets/js/lib/*.js')
	.pipe(changed(options.outPath + '/assets/js/lib'))
	.pipe(gulp.dest(options.outPath + '/assets/js/lib'));

	gulp.src(options.inPath + '/assets/js/plugin/*.js')
	.pipe(changed(options.outPath + '/assets/js/plugin'))
	.pipe(gulp.dest(options.outPath + '/assets/js/plugin'));
	
	gulp.src(options.inPath + '/assets/js/bootstrap/*.js')
	.pipe(changed(options.outPath + '/assets/js/bootstrap'))
	.pipe(gulp.dest(options.outPath + '/assets/js/bootstrap'));

	gulp.src(options.inPath + '/assets/js/*.js')
	.pipe(plumber())
	.pipe(changed(options.outPath + '/assets/js'))
	.pipe(gulp.dest(options.outPath + '/assets/js'))
	.pipe(uglify())
	.pipe(rename({
		suffix: '.min',
	}))
	.pipe(gulp.dest(options.outPath + '/assets/js'));
});

gulp.task('sass', function(){
	return gulp.src(options.inPath + '/assets/sass/*.scss')
	.pipe(plumber())
	.pipe(wait(500))
	.pipe(sass().on('error', sass.logError))
	.pipe(convertEncoding({to:'utf-8'}))
	.pipe(cssnao({
		autoprefixer: {browsers: supported, add: true}
	}))
	.pipe(gulp.dest(options.outPath + '/assets/css'));
});

gulp.task('mediasmin', function(){
	return gulp.src(options.inPath + '/medias/**/*')
	.pipe(imagemin())
	.pipe(gulp.dest(options.outPath + '/medias'));
});

gulp.task('imgmin', function(){
	return gulp.src(options.inPath + '/assets/img/**/*')
	.pipe(imagemin())
	.pipe(gulp.dest(options.outPath + '/assets/img'));
});

gulp.task('opt', function(cb){
	return runSequence(
		['imgmin'],
		['mediasmin'], 
		cb
	);
});