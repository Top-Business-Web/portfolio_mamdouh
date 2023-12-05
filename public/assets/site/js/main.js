$(function (){

    'use strict';

// Landing 

$(".landing .owl-carousel").owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 100,
    items: 3,
    nav: false,
    loop: true,
    dots: false,
    responsive: {
        0 : {
            items: 3
        },
        485 : {
            items: 3
        },
        728 : {
            items: 3
        },
        879 : {
            items: 3
        },
        1200 : {
            items: 3
        }
    }
});

// projects

$(".projects .owl-carousel").owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 100,
    items: 2,
    nav: true,
    loop: true,
    dots: false,
    responsive: {
        0 : {
            items: 1
        },
        485 : {
            items: 1
        },
        728 : {
            items: 1
        },
        879 : {
            items: 2
        },
        1200 : {
            items: 2
        }
    }
});

// image of project

$('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.small-slider'
  });
  $('.small-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.main-slider',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    autoplay: true,
    autoplaySpeed: 2000
  });


// scroll to top

$(window).scroll(function () {
    if ($(window).scrollTop() >= 700) {
        $('.scroll-top').fadeIn(400);
    }else{
        $('.scroll-top').fadeOut(400);
    }
});
$('.scroll-top').click(function () {
    
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});

// loading page

$(window).on('load',function(){
    $('.loader').css({'display': 'none'});
});

});