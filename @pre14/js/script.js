$(document).ready(function(){new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:true,live:false}).init();$("#burger").click(function(){$(".header-logo").toggleClass("active");$(".mobile-menu").toggleClass("showPanel");$(".close").css("display","block");$(".bg-blur").css("display","block")});$("#close").click(function(){$(".header-logo").toggleClass("active");$(".mobile-menu").toggleClass("showPanel");$(".close").css("display","none");$(".bg-blur").css("display","none")});$(document).on("click",function(d){if(!$(d.target).closest(".header-nav-mobile").length){$(".header-logo").removeClass("active");$(".mobile-menu").removeClass("showPanel");$(".close").css("display","none");$(".bg-blur").css("display","none")}d.stopPropagation()});$("a[href='#to_form']").on("click",function(d){$([document.documentElement,document.body]).animate({scrollTop:$(".order-block").offset().top},500);$(".header-logo").toggleClass("active");$(".mobile-menu").toggleClass("showPanel");$(".close").css("display","none");$(".bg-blur").css("display","none");$(".popup").css("display","none")});$(".concentrado-slider").slick({infinite:true,slidesToShow:1,slidesToScroll:1,nextArrow:'<img src="img/arrow-next.png" alt="">',prevArrow:'<img src="img/arrow-prev.png" alt="">'});$(".reviews-slider").slick({infinite:true,slidesToShow:1,slidesToScroll:1,nextArrow:'<img src="img/arrow-next.png" alt="">',prevArrow:'<img src="img/arrow-prev.png" alt="">',responsive:[{breakpoint:769,settings:{arrows:false}}]});$(".slider").slick({infinite:true,slidesToShow:1,slidesToScroll:1,nextArrow:'<img src="img/arrow-next.png" alt="">',prevArrow:'<img src="img/arrow-prev.png" alt="">'});$("a[href='#to_form']").on("click",function(d){$([document.documentElement,document.body]).animate({scrollTop:$(".order-block").offset().top},500)});$("#open-modal").click(function(){$(".modal-menu").css("display","block")});$(".close-modal").click(function(){$(".modal-menu").css("display","none")});let block_show=false;function a(){if(block_show){return false}let wt=$(window).scrollTop();let wh=$(window).height();let et=$(".order-block").offset().top;let eh=$(".order-block").outerHeight();let dh=$(document).height();if(wt+wh>=et||wh+wt==dh||eh+et<wh){block_show=true;setTimeout(b,1000)}}function b(){$(".old-price").fadeIn().set}$(window).scroll(function(){a()});$(document).ready(function(){a()});function c(){$(".popup").css("display","flex")}$(".close-popup").on("click",function(){$(".popup").fadeOut()});setTimeout(function(){c()},5000)});