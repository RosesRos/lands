$.fn.isOnScreen=function(b){if(!b){b=0}var a={};a.top=$(window).scrollTop();a.bottom=a.top+$(window).height();var c={};c.top=this.offset().top+b;c.bottom=c.top+this.outerHeight()-b;return((c.top<=a.bottom)&&(c.bottom>=a.top))};var scrollDetection=function(a){$(".js-scroll-detection").each(function(){var c=this;var b=$(c).data("scroll-shift")||20;if($(c).isOnScreen(b)){$(c).addClass("js-isonscreen");a()}})};var start=true;var discounted=function(){setTimeout(function(){$(".sec12").addClass("discounted");$(".sec12 .secret").slideDown(500);clocks()},2000)};var clock1,clock2;var clocks=function(){clock1.start();clock2.start()};$(document).ready(function(){$(".pre_toform").click(function(f){f.preventDefault();var d=$(".js_submit"),c=d.closest("form");if($("form#order_form").length){d=$("#order_form .js_submit"),c=d.closest("form#order_form")}if(c.length&&d.is(":visible")){$("html,body").animate({scrollTop:c.offset().top},1500)}return false});$(".for_scroll").click(function(){$("html, body").animate({scrollTop:$("form").offset().top-300},700);return false});clock1=$(".digits3").FlipClock({clockFace:"HourlyCounter",countdown:true,autoStart:false});clock1.setTime(300);clock2=$(".digits2").FlipClock({clockFace:"HourlyCounter",countdown:true,autoStart:false});clock2.setTime(300)});