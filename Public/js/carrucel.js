$(document).ready(function(){
    //CAROUCEL TESTIMONIALS
    $('.logos-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay: true,
        nav:true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        navText : ["<span class='arrow-carroucel arrow-back'></span>","<span class='arrow-carroucel arrow-next'></span>"],
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});