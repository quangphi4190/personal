// slide slick
$(document).ready(function(){
    $('.slide').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 5000,

    });
});


let btn = document.querySelector('.close-btn');
// mobile menu
nav = document.querySelector('.mobile-menu');
hamburger = document.querySelector('.hamburger-btn'),
    arrowDownBtns = document.querySelectorAll('.mobile-menu .arrow-down'),
    mask = document.querySelector('.mask');

// click the hamburger btn to opern mobile menu
hamburger.addEventListener('click', function(event){
    event.stopPropagation();
    nav.style.left = '0';
    mask.style.display = 'block';
    // lock body
    window.document.body.classList.add("fixed-position");

});


nav.addEventListener('click', function(event){
    event.stopPropagation();
    btn.onclick = function(){
        nav.style.left = '-120%';
        mask.style.display = 'none';
        window.document.body.classList.remove('fixed-position');
    }

});

document.body.addEventListener('click', function(){
    if(nav.style.left = '0'){
        nav.style.left = '-120%';
        mask.style.display = 'none';
        window.document.body.classList.remove('fixed-position');
    }
});

// toggle arrow down
arrowDownBtns.forEach(btn => {
    let liEle = btn.parentNode.parentNode;
    liEle.addEventListener('click', function(){
        let subUl = btn.parentNode.nextElementSibling;
        subUl.classList.toggle('toggle-open');
        btn.classList.toggle('toggle-rotate');
    })
});



$.fn.jQuerySimpleCounter = function( options ) {
    var settings = $.extend({
        start:  0,
        end:    100,
        easing: 'swing',
        duration: 400,
        complete: ''
    }, options );

    var thisElement = $(this);

    $({count: settings.start}).animate({count: settings.end}, {
        duration: settings.duration,
        easing: settings.easing,
        step: function() {
            var mathCount = Math.ceil(this.count);
            thisElement.text(mathCount);
        },
        complete: settings.complete
    });
};


$('#number1').jQuerySimpleCounter({end: 12,duration: 3000});
$('#number2').jQuerySimpleCounter({end: 55,duration: 3000});
$('#number3').jQuerySimpleCounter({end: 359,duration: 2000});
$('#number4').jQuerySimpleCounter({end: 246,duration: 2500});



/* AUTHOR LINK */
$('.about-me-img').hover(function(){
    $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
}, function(){
    $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
});

