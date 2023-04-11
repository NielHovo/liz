#!/bin/sh
npx sass ./src/sass/style.scss ./public/wp-content/themes/liz/style.css
cp ./src/php/*.* ./public/wp-content/themes/liz
cp -R ./src/images ./public/wp-content/themes/liz/images
cp -R ./src/favicons ./public//wp-content/themes/liz
cp -R ./src/fonts ./public/wp-content/themes/liz/fonts
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/liz/main.js  --minify

