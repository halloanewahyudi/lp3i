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

import Alpine from 'alpinejs'
import gsap from 'gsap'
import ScrollTrigger from 'gsap/ScrollTrigger'


gsap.registerPlugin(ScrollTrigger)

window.Alpine = Alpine
 
Alpine.start()


document.addEventListener('DOMContentLoaded', () => {
// every class fadeup di scroll
const fadeup = document.querySelectorAll('.fade-up')

gsap.utils.toArray(fadeup).forEach((fadeup) => {
  gsap.from(fadeup, {
    scrollTrigger: {
      trigger: fadeup,
      toggleActions: 'restart none none none',
      start: 'top 80%',
      end: 'top 50%',
      scrub: 1
    },
    y: 100,
    opacity: 0,
    duration: 1,
  })
})

// every class zomm-in di scroll
const zoomin = document.querySelectorAll('.zoom-in')

gsap.utils.toArray(zoomin).forEach((zoomin) => {
  gsap.from(zoomin, {
    scrollTrigger: {
      trigger: zoomin,
      toggleActions: 'restart none none none',
      start: 'top 80%',
      end: 'top 50%',
      scrub: 1
    },
    scale: 0,
    opacity: 0,
    duration: 1,
  })
})
// body class
const breakpoints = {
    md: 768, // Breakpoint for 'body-md' (min-width: 768px)
    lg: 1024, // Breakpoint for 'body-lg' (min-width: 1024px)
    xl: 1280, // Breakpoint for 'body-xl' (min-width: 1280px)
  };

  const updateBodyClass = () => {
    const width = window.innerWidth;
    const body = document.body;

    // Remove existing breakpoint classes
    body.classList.remove('body-md', 'body-lg', 'body-xl');

    // Add the appropriate class based on current width
    if (width >= breakpoints.xl) {
      body.classList.add('body-xl');
    } else if (width >= breakpoints.lg) {
      body.classList.add('body-lg');
    } else if (width >= breakpoints.md) {
      body.classList.add('body-md');
    }
  };

  // Initial check
  updateBodyClass();

  // Update class on window resize
  window.addEventListener('resize', updateBodyClass);
  
})


 
