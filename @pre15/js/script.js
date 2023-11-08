$(document).ready(function() {
    new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 0,
        mobile: true,
        live: false
    }).init();
    const a = document.getElementById("open-video");
    $("#open-video").click(function() {
        $(".lightbox").toggleClass("lightbox-active");
        a.pause()
    });
    $(".close-video").click(function() {
        $(".lightbox").removeClass("lightbox-active");
        $(".video").trigger("pause");
        a.play()
    });
    $("a[href='#to_form']").on("click", function(e) {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".order-block").offset().top
        }, 500);
        $(".popup").css("display", "none");
        $(".lightbox").removeClass("lightbox-active")
    });
    $("a[href='#to_form']").on("click", function(e) {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".order-block").offset().top
        }, 500)
    });
    let block_show = false;

    function b() {
        if (block_show) {
            return false
        }
        let wt = $(window).scrollTop();
        let wh = $(window).height();
        let et = $(".order-block").offset().top;
        let eh = $(".order-block").outerHeight();
        let dh = $(document).height();
        if (wt + wh >= et || wh + wt == dh || eh + et < wh) {
            block_show = true;
            setTimeout(c, 1000)
        }
    }

    function c() {
        $(".old-price").fadeIn().set
    }
    $(window).scroll(function() {
        b()
    });
    $(document).ready(function() {
        b()
    });

    function d() {
        $(".popup").css("display", "flex")
    }
    $(".close-popup").on("click", function() {
        $(".popup").fadeOut()
    });
    setTimeout(function() {
        d()
    }, 5000);
    $("#open-modal").click(function() {
        $(".modal-menu").css("display", "block")
    });
    $(".close-modal").click(function() {
        $(".modal-menu").css("display", "none")
    })
});