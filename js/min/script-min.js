function send_form(t,e,i){$("#"+t).submit(function(){var s=$(this).serialize();return $.ajax({type:"POST",url:"/mail/"+e+".php",data:s,success:function(e){"OK"==e?(result='<div class="form-sended">'+i+"</div>",$("#"+t).html(result)):(result=e,$("#"+t).html(result))}}),!1})}function fform(t,e){$(".fform-title").html(t),$(".pr-size-input").val(e),$(".modal-titleff").val(t)}jQuery.fn.getTitle=function(){var t=jQuery("a.fancybox");jQuery.each(t,function(){var t=jQuery(this).children("img").attr("title");jQuery(this).attr("title",t)})};var thumbnails=jQuery("a:has(img)").not(".nolightbox").filter(function(){return/\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr("href"))}),posts=jQuery(".item-images");posts.each(function(){jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()}),jQuery("a.fancybox").fancybox({helpers:{overlay:{locked:!1}}}),$(document).ready(function(){$(".header-navigation li.scroll").on("click","a",function(t){t.preventDefault();var e=$(this).attr("href"),i=$(e).offset().top;$("body,html").animate({scrollTop:i-$(".fixed-header").height()},500)})}),$(document).ready(function(){$(".small-cost").on("click","a.size",function(t){t.preventDefault();var e=$(this).attr("href"),i=$(e).offset().top;$("body,html").animate({scrollTop:i-$(".fixed-header").height()},500)})}),send_form("mainblockform","sendmyform","Данная функция в разработке до 30.09.2016. Спасибо за доверие."),send_form("managerform","sendmyform","Спасибо за сообщение, скоро мы с Вами свяжемся."),send_form("fformform","sendmyform","Спасибо, скоро мы с Вами свяжемся."),$(".slider-related-products").slick({infinite:!0,slidesToShow:4,slidesToScroll:1,autoplay:!0,autoplaySpeed:7e3,dots:!1,responsive:[{breakpoint:993,settings:{slidesToShow:3}},{breakpoint:760,settings:{slidesToShow:2}},{breakpoint:500,settings:{slidesToShow:1}}]}),$(".review-slider").slick({infinite:!0,slidesToShow:4,slidesToScroll:1,autoplay:!0,autoplaySpeed:7e3,dots:!1,responsive:[{breakpoint:993,settings:{slidesToShow:3}},{breakpoint:760,settings:{slidesToShow:2}},{breakpoint:500,settings:{slidesToShow:1}}]}),$(document).ready(function(){$(".btn-site-product").click(function(){"Показать всё"===$(this).html()?$(this).html("Скрыть"):$(this).html("Показать всё"),$(this).hide(),$(this).prev(".site-products-container").children(".additional").stop(!0,!0).slideToggle("slow")})});
//# sourceMappingURL=script-min.js.map