$(document).ready(function () {
    new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 0,
        mobile: true,
        live: false,
    }).init();
    $('.reviews-slider').slick({
        dots: true,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        adaptiveHeight: true,
        nextArrow: '<img src="img/next.png" alt="">',
        prevArrow: '<img src="img/prev.png" alt="">',
    });

    const mobileMenu = $('.header-mobile');
    const closeMenu = $('.close');
    const burgerMenu = $('.burger');
    const blurBg = $('.bg-blur');

    function showMobileMenu() {
        $('html').css('overflow-y', 'hidden')
        mobileMenu.addClass('showPanel');
        closeMenu.css('display', 'block');
        blurBg.fadeIn();
        burgerMenu.css('display', 'none');
    }

    function closeMobileMenu() {
        $('html').css('overflow-y', 'scroll');
        mobileMenu.removeClass('showPanel');
        closeMenu.css('display', 'none');
        burgerMenu.css('display', 'block');
        blurBg.fadeOut();
    }

    $("#show").click(
        function() {
            showMobileMenu();
        }
    );
    $("#hide").click(
        function() {
            closeMobileMenu();
        }
    );
    $(document).on('click', function(e) {
        if (!$(e.target).closest(".header-navigation-mobile").length) {
            closeMobileMenu();
        }
        e.stopPropagation();
    });

    $("a[href='#to_form']").on("click", function (event) {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".order").offset().top
        }, 500);
    });
    $(".header-mobile a[href='#to_form']").on("click", function (event) {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".order").offset().top
        }, 500);
        closeMobileMenu();
    });

    const ANGLE = 40;
    let card = document.querySelectorAll(".img-rotate");

    card.forEach((element, i) => {
        floatable(element);
    });

    function floatable(panel) {
        panel.addEventListener("mouseout", (e) => {
            panel.style.transform = `perspective(400px)
                   rotateX(0deg)
                   rotateY(0deg)
                   rotateZ(0deg)
                    translateZ(40px)`;
            panel.style.transition = `all 1s linear`;
        });

        panel.addEventListener("mousemove", (e) => {
            let w = panel.clientWidth;
            let h = panel.clientHeight;
            let y = ((e.offsetX - w * 0.5) / w) * ANGLE;
            let x = ((1 - (e.offsetY - h * 0.5)) / h) * ANGLE;

            panel.style.transform = `perspective(400px)
                   rotateX(${x}deg)
                   rotateY(${y}deg)`;
        });
    }

    $("#open-modal").click(function () {
        $(".modal-menu").fadeIn();
    });

    $(".close-modal").click(function () {
        $(".modal-menu").fadeOut();
    });

    let count1 = 0;
    let count2 = 0;
    let count3 = 0;
    let text1 = 'Hay muchas versiones falsas que siguen apareciendo en farmacias y tiendas de terceros. ¡Asegúrate de obtener';
    let text2 = 'FLASH';
    let text3 = 'SOLAMENTE de nuestro sitio web para evitar falsificaciones y estafas!';
    let speed = 50;

    function typeWriter1() {
        if(count1 < text1.length) {
            document.getElementById('text1').innerHTML += text1.charAt(count1);
            count1++;
            setTimeout(typeWriter1, speed);
        }
    }
    function typeWriter2() {
        if(count2 < text2.length) {
            document.getElementById('product-name').innerHTML += text2.charAt(count2);
            count2++;
            setTimeout(typeWriter2, speed);
        }
    }
    function typeWriter3() {
        if(count3 < text3.length) {
            document.getElementById('text2').innerHTML += text3.charAt(count3);
            count3++;
            setTimeout(typeWriter3, speed);
        }
    }

    let block_show = false;

    function scrollTracking(){
        if (block_show) {
            return false;
        }

        let wt = $(window).scrollTop();
        let wh = $(window).height();
        let et = $('#demo').offset().top;
        let eh = $('#demo').outerHeight();
        let dh = $(document).height();

        if (wt + wh >= et || wh + wt == dh || eh + et < wh){
            block_show = true;

            setTimeout(showDemo1, 1000);
            setTimeout(showDemo2, 6900);
            setTimeout(showDemo3, 7200);
        }
    }

    function showDemo1() {
        typeWriter1();
    }

    function showDemo2() {
        typeWriter2();
    }

    function showDemo3() {
        typeWriter3();
    }

    $(window).scroll(function(){
        scrollTracking();
    });
    $(document).ready(function(){
        scrollTracking();
    });

    let sheet1 = document.getElementById("parallax-move-1");

    window.addEventListener("mousemove", function (e) {
        let x = e.clientX / window.innerWidth;
        let y = e.clientY / window.innerHeight;
        sheet1.style.transform = "translate(-" + x * 20 + "px, -" + y * 20 + "px)";
    });

    var appendNull = function (t) {
        return t < 10 ? 0 + t.toString() : t
    };

    function dtime_nums(t) {
        d = new Date, p = new Date(d.getTime() + 864e5 * (t + 1)), monthb = "01,02,03,04,05,06,07,08,09,10,11,12".split(","); return (appendNull(p.getDate()) + "." + monthb[p.getMonth()] + "." + p.getFullYear())
    }

    $('.reviews-slide-date').text(dtime_nums(-1));
})




