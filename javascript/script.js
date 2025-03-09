/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect'
import Splide from '@splidejs/splide';

window.Alpine = Alpine;
Alpine.plugin(intersect)
Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
	// start script =================

	// home slideshow
	new Splide('#home-slideshow', {
		autoplay: true,
		perPage: 1,
		perMove: 1,
		speed: 1500,
		//  pauseOnHover: false,
		type: 'loop',
	}).mount();
	/// end script=================

});


