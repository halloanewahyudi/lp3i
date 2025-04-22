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
import intersect from '@alpinejs/intersect';
import Splide from '@splidejs/splide';

window.Alpine = Alpine;
Alpine.plugin(intersect);
Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
	console.log('Splide script loaded');

	// Menu mobile 
const menuMobile = document.querySelector('#btn-menu');
const menuContent = document.querySelector('.menu-primary-container');

menuMobile.addEventListener('click', function () {
  menuContent.classList.toggle('open-menu');
  console.log('Menu clicked');

  // sub menu dropdown
  const parentMenus = menuContent.querySelectorAll('.menu-item-has-children > a');

  parentMenus.forEach(link => {
    // Cegah duplicate event listener
    link.removeEventListener('click', handleSubmenuClick); 
    link.addEventListener('click', handleSubmenuClick);
  });
});

function handleSubmenuClick(e) {
  e.preventDefault();
  const parentLi = this.parentElement;
  parentLi.classList.toggle('submenu-open');
}


	// Cek elemen home slideshow
	const homeSlideshow = document.querySelector('#home-slideshow');
	if (homeSlideshow) {
		console.log('Home slideshow found');
		new Splide(homeSlideshow, {
			autoplay: true,
			perPage: 1,
			perMove: 1,
			speed: 1500,
			type: 'loop',
		}).mount();
	} else {
		console.log('Home slideshow not found');
	}

	// Cek elemen Splide Blog
	const splideBlog = document.querySelector('#splide-blog');
	if (splideBlog) {
		console.log('Splide blog found, initializing...');
		const blogSlider = new Splide(splideBlog, {
			type: 'loop',
			autoplay: true,
			pauseOnHover: false,
			perPage: 4,
			gap: '1rem',
			perMove: 1,
			speed: 1500,
			pagination: false,
			arrows: false,
			breakpoints: {
				1024: {
					perPage: 3,
				},
				768: {
					perPage: 2,
				},
				640: {
					perPage: 1,
				},
			},
		});
		blogSlider.mount();
		// create custom arrows
		const prevArrow = document.getElementById('splide-blog-prev');
		const nextArrow = document.getElementById('splide-blog-next');
		prevArrow.addEventListener('click', () => blogSlider.go('<'));
		nextArrow.addEventListener('click', () => blogSlider.go('>'));
	} else {
		console.log('Splide blog not found');
	}

	// sticky
	//========================
	let stickyElements = document.querySelectorAll('.sticky-on-scroll');
	let navbar = document.querySelector('nav');
	let footer = document.querySelector('#end-sticky');

	if (stickyElements.length > 0 && footer) {
		let navbarHeight = navbar?.offsetHeight || 80; // Jika navbar tidak ditemukan, default 80px
		let triggerOffset = navbarHeight + 100; // Sticky mulai setelah navbar + 100px

		window.addEventListener('scroll', function () {
			stickyElements.forEach((el) => {
				let footerOffset = footer.offsetTop - window.innerHeight + 50; // 50px sebelum menyentuh footer
				let scrollY = window.scrollY;

				if (scrollY > triggerOffset && scrollY < footerOffset) {
					el.classList.add('fixed', 'top-24');
					el.classList.remove('absolute', 'bottom-0');
				} else if (scrollY >= footerOffset) {
					el.classList.remove('fixed', 'top-24');
					el.classList.add('hidden');
				} else {
					el.classList.remove('fixed', 'absolute', 'bottom-0');
					el.classList.add('hidden');
				}
			});
		});
	}

	// kurikulum splide
	const kurikulumSplide = document.querySelector('#kurikulum-splide');
	if (kurikulumSplide) {
		console.log('Kurikulum Splide found, initializing...');
		const kurikulumSlider = new Splide(kurikulumSplide, {
			type: 'loop',
			//autoplay: true,
			//pauseOnHover: false,
			perPage: 2,
			gap: '2rem',
			perMove: 1,
			speed: 1500,
			pagination: false,
			arrows: false,
			breakpoints: {
				1024: {
					perPage: 2,
				},
				768: {
					perPage: 2,
				},
				640: {
					perPage: 1,
				},
			},
		});
		kurikulumSlider.mount();
		// Event klik manual
		const prevArrow = document.getElementById('kurikulum-splide-prev');
		const nextArrow = document.getElementById('kurikulum-splide-next');
		prevArrow.addEventListener('click', () => kurikulumSlider.go('<'));
		nextArrow.addEventListener('click', () => kurikulumSlider.go('>'));
	} // end if kurikulumSplide

	// pilihan-program splide
	const pilihanProgramSplide = document.querySelector('#pilihan-program-splide');
	if (pilihanProgramSplide) {
		console.log('Pilihan Program Splide found, initializing...');
		const pilihanProgramSlider = new Splide(pilihanProgramSplide, {
			type: 'loop',
			//autoplay: true,
			//pauseOnHover: false,
			perPage: 2,
			gap: '2rem',
			perMove: 1,
			speed: 1500,
			pagination: false,
			arrows: false,
			breakpoints: {
				1024: {
					perPage: 2,
				},
				768: {
					perPage: 2,
				},
				640: {
					perPage: 1,
				},
			},
		});
		pilihanProgramSlider.mount();
		// Event klik manual
		const prevArrow2 = document.getElementById('pilihan-program-splide-prev');
		const nextArrow2 = document.getElementById('pilihan-program-splide-next');
		prevArrow2.addEventListener('click', () => pilihanProgramSlider.go('<'));
		nextArrow2.addEventListener('click', () => pilihanProgramSlider.go('>'));
	} // end if pilihanProgramSplide

	// end script
	//=============================
});
