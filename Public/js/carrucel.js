$(document).ready(function(){
    //CAROUCEL TESTIMONIALS
    $('.logos-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
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