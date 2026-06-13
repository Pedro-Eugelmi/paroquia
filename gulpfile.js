//npm install --save-dev gulp sass gulp-sass gulp-terser gulp-rename

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const terser = require('gulp-terser');
const rename = require('gulp-rename');

// Função para compilar SCSS para CSS
function compileSass() {
    return gulp.src('./styles/scss/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest('./styles'));
}

// Função para minificar JavaScript
function minifyJs() {
    return gulp.src('./scripts/script.js') // Origem do seu JS
        .pipe(terser()) // Minifica o código
        .pipe(rename({ suffix: '.min' })) // Adiciona o .min ao nome
        .pipe(gulp.dest('./scripts')); // Salva na mesma pasta /scripts
}

// Função para monitorar alterações (Watch)
function watchFiles() {
    gulp.watch('./styles/scss/*.scss', compileSass);
    gulp.watch('./scripts/script.js', minifyJs); // Monitora o JS também
}

// Exportar tarefas
exports.compileSass = compileSass;
exports.minifyJs = minifyJs;
exports.watch = watchFiles;
exports.default = gulp.series(gulp.parallel(compileSass, minifyJs), watchFiles);