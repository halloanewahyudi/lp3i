document.addEventListener('DOMContentLoaded', function () {
    const slideshowElement = document.querySelector('#slideshow');

    if (slideshowElement) {
        const slideshow = new Splide('#slideshow', {
            type: 'loop',
            perPage: 1,
            pagination: false,
            autoplay: true,
            interval: 5000,
            arrows: true
        });

        slideshow.mount();
    }
});
