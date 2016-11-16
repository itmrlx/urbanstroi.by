// fancybox
jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
	var arr = jQuery("a.fancybox");
	jQuery.each(arr, function() {
		var title = jQuery(this).children("img").attr("title");
		jQuery(this).attr('title',title);
	})
}
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) }); // Find .post>a>img and create fancybox image gallery
var posts = jQuery(".item-images"); //find post
posts.each(function() {
	jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
jQuery("a.fancybox").fancybox({ // fancybox on
	helpers : {
		overlay : {
      locked : false // try changing to true and scrolling around the page
    }
  }
});

// slow scroll menu
$(document).ready(function(){
	$(".header-navigation li.scroll").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top - $('.fixed-header').height()}, 500);
	});
});
$(document).ready(function(){
	$(".small-cost").on("click","a.size", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top - $('.fixed-header').height()}, 500);
	});
});

// forms
function send_form (id, file, message) {
	$('#'+id).submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: '/mail/'+file+'.php',
			data: str,
			success: function(msg){
				if(msg == 'OK'){
					result = '<div class="form-sended">'+message+'</div>';
					$('#'+id).html(result);
				}else{
					result = msg;
					$('#'+id).html(result);
				}
			}
		});
		return false;
	});
}
send_form('mainblockform', 'sendmyform', 'Данная функция в разработке до 30.09.2016. Спасибо за доверие.');
send_form('managerform', 'sendmyform', 'Спасибо за сообщение, скоро мы с Вами свяжемся.');
send_form('fformform', 'sendmyform', 'Спасибо, скоро мы с Вами свяжемся.');
send_form('fformform2', 'sendmyform', 'Спасибо, скоро мы с Вами свяжемся.');

function fform(name,value) {
	$('.fform-title').html(name);
	$('.pr-size-input').val(value);
	$('.modal-titleff').val(name);
}

// related products slider
$('.slider-related-products').slick({
	infinite: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 7000,
	dots: false,
	responsive: [
	{
		breakpoint: 993,
		settings: {
			slidesToShow: 3
		}
	},
	{
		breakpoint: 760,
		settings: {
			slidesToShow: 2
		}
	},
	{
		breakpoint: 500,
		settings: {
			slidesToShow: 1
		}
	}
	]
});

// related products slider
$('.review-slider').slick({
	infinite: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 7000,
	dots: false,
	responsive: [
	{
		breakpoint: 993,
		settings: {
			slidesToShow: 3
		}
	},
	{
		breakpoint: 760,
		settings: {
			slidesToShow: 2
		}
	},
	{
		breakpoint: 500,
		settings: {
			slidesToShow: 1
		}
	}
	]
});

// site products toggle
$(document).ready(function(){
	$('.btn-site-product').click(function(){
		$(this).html() === "Показать всё" ? $(this).html("Скрыть") : $(this).html("Показать всё");
		$(this).hide();
		$(this).prev('.site-products-container').children('.additional').stop(true,true).slideToggle('slow');
	});
});

// modal window when close page
function dontExitModal() {
		if($(window).width() >= 767){
			$(window).mousemove(function(e) {
				if(!$.fancybox.isOpen) {
					if(e.clientY <= 15){
						$.fancybox.open({href : '#dont-exit', padding : 0});
					}
				}
			});
		};
};
