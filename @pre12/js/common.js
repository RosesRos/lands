$(document).ready(function() {

    var isMobile = false;

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)) {
        isMobile = true
    }

    if (!isMobile) {
        var myFullpage = new fullpage('#fullpage', {
            navigation: true,
            scrollOverflow: true,
            hybrid: true,
            normalScrollElements: '.normalScroll',
        });
        $('.toform').on('click', function() {
            myFullpage.destroy('all');
        });
    }



    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
        setTimeout(function() {
            var myFullpage = new fullpage('#fullpage', {
                navigation: true,
                scrollOverflow: true,
                hybrid: true,
                normalScrollElements: '.normalScroll1',
            });
            $('.toform').on('click', function() {
                myFullpage.destroy('all');
            });
        }, 500);
    }



    $('.goToForm').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#fullpage').offset().top - 100
        }, 700)
    });

    scrollShow();

    reviewSlider();

});

$(document).on('scroll', function() {
    scrollShow();
});

var scrollShow = function() {

    var element = $('[data-unshow]');
    var scroll = $(document).scrollTop();
    var winHeight = $(window).height();

    element.each(function() {

        var self = $(this);
        var elementPos = self.offset().top;

        if (scroll >= (elementPos - (winHeight / 1.2))) {
            self.addClass('show')
        }

    });

};



/* Card Slider - Swiper */
var cardSlider = new Swiper('.card-slider', {
    autoplay: {
        delay: 4000,
        disableOnInteraction: false
    },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    slidesPerView: 3,
    spaceBetween: 70,
    breakpoints: {
        // when window is <= 767px
        767: {
            slidesPerView: 1
        },
        // when window is <= 991px
        991: {
            slidesPerView: 1,
            spaceBetween: 40
        }
    }
});





function reviewSlider() {

    var slider = $('.reviews__wrap');

    settings = {
        dots: false,
        arrows: true,
    };

    if ($(window).width() <= 1023) {
        slider.slick(settings);
    }

    $(window).on('resize', function() {

        if ($(window).width() >= 1023) {
            if (slider.hasClass('slick-initialized')) {
                slider.slick('unslick');
            }
        } else if (!slider.hasClass('slick-initialized')) {
            return slider.slick(settings);
        }

    });

}







setTimeout(function() {
    var r_text = new Array();
    r_text[0] = "Mexico City";
    r_text[1] = "Guadalajara";
    r_text[2] = "Monterrey";
    r_text[3] = "Tijuana";
    r_text[4] = "Cancún";
    r_text[5] = "Puebla";
    r_text[6] = "Toluca";
    r_text[7] = "Acapulco";
    r_text[8] = "Hermosillo";
    r_text[9] = "León";
    r_text[10] = "Juárez";
    r_text[11] = "Mérida";
    r_text[12] = "San Luis Potosí";
    r_text[13] = "Tlaquepaque";
    r_text[14] = "Veracruz";
    r_text[15] = "Oaxaca";
    r_text[16] = "Cuernavaca";
    r_text[17] = "Tepic";
    r_text[18] = "Ciudad Victoria";
    r_text[19] = "Tuxtla Gutiérrez";




    var r_product = new Array();
    r_product[0] = "Magicoa";
    setInterval(function() {
        $(".custom-social-proof").stop().slideToggle('slow');
    }, 3000);
    $(".custom-close").click(function() {
        $(".custom-social-proof").stop().slideToggle('slow');
    });
    setInterval(function() {
        var myNumber = Math.floor(7 * Math.random());

        $('#country').text(r_text[myNumber]);

        $('#product').text(r_product[Math.floor(7 * Math.random())]);
        for (var i = 0; i < 10; i++) {
            var timeVal = Math.floor(Math.random() * 59) + 1;

        }

        $('#time').text(timeVal);


    }, 6000);
}, 2000);