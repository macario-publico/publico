new WOW().init();

$("nav.fixed-top").autoHidingNavbar();

// Hide/show animation hamburger function
$('.navbar-toggler').on('click', function () {

    // Take this line to first hamburger animations
    $('.animated-icon1').toggleClass('open');
    toggleMenu();
});

//$('#hamburguesa').click(function () {
//    toggleMenu();
//
//});

function toggleMenu() {
    var menu = $('.navbar');
    if (!menu.hasClass('top-nav-collapse')) {
        //alert('No Tiene la clase');
        $('.navbar').toggleClass('backgroundColor');
    }
}




$(window).scroll(function () {
    toogleClass();
});

function toogleClass() {

    if ($('nav').hasClass('top-nav-collapse')) {
        $('.logoWhite').fadeOut();
        $('.logoBlack').fadeIn();
        $('.logoWhite2').fadeOut();
        $('.logoBlack2').fadeIn();
    } else {
        //No tiene la clase 
        $('.logoWhite').fadeIn();
        $('.logoBlack').fadeOut();
        $('.logoWhite2').fadeIn();
        $('.logoBlack2').fadeOut();
    }
}


$(window).scroll(function () {
    var top = $(this).scrollTop();
    var menu = $('#menuRedes');

    if (top >= 200) {
        menu.fadeIn(350);
    } else {
        menu.fadeOut(350);
    }

});

$(".owl-services").owlCarousel({
    items: 3,
    slideBy: 1,
    loop: true,
    margin: 30,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2
        },
        576: {
            items: 2
        },
        768: {
            items: 3
        },
        992: {
            items: 3
        },
        1200: {
            items: 3
        }
    }
});

$(".owl-testimonial").owlCarousel({
    items: 4,
    slideBy: 2,
    loop: true,
    autoplay: true,
    margin: 20,
    stagePadding: 15,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        },
        1200: {
            items: 3
        }
    }
});

$(".owl-colaboradores").owlCarousel({
    items: 1,
    slideBy: 2,
    animateOut: 'fadeOut',
    animateIn: 'fadeInRight',
    loop: true,
    margin: 30,
    autoplay: true,
    margin: 50,
    stagePadding: 20,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    smartSpeed: 750,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 1
        },
        768: {
            items: 1
        },
        992: {
            items: 1
        },
        1200: {
            items: 1
        }
    }
});

$(".owl-aliados").owlCarousel({
    items: 5,
    slideBy: 2,
    animateOut: 'fadeOut',
    animateIn: 'fadeInRight',
    loop: true,
    margin: 10,
    stagePadding: 10,
    autoplay: true,
    margin: 50,
    stagePadding: 20,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    smartSpeed: 350,
    responsive: {
        0: {
            items: 2
        },
        576: {
            items: 2
        },
        768: {
            items: 4
        },
        992: {
            items: 5
        },
        1200: {
            items: 6
        }
    }
});

$(window).on('load', function () {
    $('#slider').nivoSlider();
});

/*====================================
=          Botton Plus         =
====================================*/

$(function () {
    var btnPlus = $('#float-social');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            btnPlus.addClass('movePlus');
            btnPlus.removeClass('movePlus2');
        } else {
            btnPlus.removeClass('movePlus');
            btnPlus.addClass('movePlus2');

        }
    });
});

var tl = new TimelineMax();

tl.to('#face', .35, {
        top: '-60',
        opacity: 1,
        ease: Expo.easeOut
    })
    .to('#twitter', .35, {
        top: '-120',
        opacity: 1,
        ease: Expo.easeOut
    }, "-=0.15")
    .to('#linkedin', .35, {
        top: '-180',
        opacity: 1,
        ease: Expo.easeOut
    }, "-=0.15")
    .to('#instagram', .35, {
        top: '-240',
        opacity: 1,
        ease: Expo.easeOut
    }, "-=0.15")
    .to('#spotify', .35, {
        top: '-300',
        opacity: 1,
        ease: Expo.easeOut
    }, "-=0.15")
    .to('#youtube', .35, {
        top: '-360',
        opacity: 1,
        ease: Expo.easeOut
    }, "-=0.15");

tl.pause();

$('#plus').click(function () {
    toggleRedes();
});

function toggleRedes() {
    if ($('#plus').hasClass('showRedes')) {
        $('#plus').removeClass('showRedes');
        tl.reverse();

    } else {
        $('#plus').addClass('showRedes');
        tl.play();
    }
}
