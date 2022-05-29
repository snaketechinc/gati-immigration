/*--- testimonial carousal start ---*/
$(document).ready(function() {
    $('.testimonial_carousel').owlCarousel({
        center: false,
        items: 2.3,
        loop: true,
        margin: 20,
        autoplay:true,
        autoplayTimeout: 6000,
        dots: true,
        smartSpeed: 2400,
        onmousewheel: true,
        dotsEach: 1,
        singleItem: true,
        responsive: {
            0: {
                items: 1.15,
            },
            768: {
                items: 1.25,
            },
            1000: {
                items: 2,
                margin: 20,
            }
        }
    })
})
/*--- testimonial carousal end ---*/
