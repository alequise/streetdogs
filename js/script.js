(function($, sr) {

    alturaImg = $('.navJu').height(); // altura da imagem, vai servir para sabermos a altura que o scroll tem de andar até a navbar ficar fixa
    $(window).on('scroll', function() { // cada vez de que fizer scroll o que está dentro desta função vai acontecer
        if($(window).scrollTop() >= alturaImg) { // se o que percorremos com o scroll for maior ou igual à altura da imagem adicionamos esta classe à navbar
            $('#navbar').addClass('fixed-nav');
        }
        else {
            $('#navbar').removeClass('fixed-nav');
        }
    });




// Smooth scrolling using jQuery easing
$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: (target.offset().top - 72)
            }, 1000, "easeInOutExpo");
            return false;
        }
    }
});

// Closes responsive menu when a scroll trigger link is clicked
$('.js-scroll-trigger').click(function () {
    $('.navbar-collapse').collapse('hide');
});
})

