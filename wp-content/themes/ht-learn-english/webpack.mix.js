let mix = require('laravel-mix');

mix
	
	.sass('assets/sass/app.scss', 'assets/css/')
	
	.options({processCssUrls: false})
	// .setPublicPath('wp-content/themes/')
	.sourceMaps();
