$((function(){var e=document.querySelector(".wheel-img"),t=document.querySelector(".spin-result-wrapper");$(".cursor-text").click((function(){$(".cursor-text").css("pointer-events","none"),e.classList.contains("rotated")?t.style.display="block":(e.classList.add("super-rotation"),setTimeout((function(){t.style.display="block"}),8e3),setTimeout((function(){$(".spin-wrapper").slideUp(),$(".form").slideDown()}),1e4),e.classList.add("rotated"))}))}));