// JavaScript/JQuery Document
// This script will hide the nav when scrolling down and make it appear when scrolling up, beginning after 300px


var position = $(window).scrollTop();


	$(window).scroll(function() {
		
		var scroll = $(window).scrollTop();//detects where you have scrolled on the page
		if (scroll > position) {
				
			if ($(document).scrollTop() > 300 && $('#nav').hasClass('visible')){//case where scrolling down
				$('#nav').slideUp( 300 ).delay( 700 );
				$('#nav').toggleClass('visible hidden');
				if ($('#navlist').hasClass('visible')){
					$('#navlist').toggleClass('visible hidden');
				}
			};
		} else {//case where scrolling up
			if ($(document).scrollTop() > 300 && $('#nav').hasClass('hidden')){
				$('#nav').slideDown( 300 ).delay( 700 );
				$('#nav').toggleClass('hidden visible');
				if ($('#navlist').hasClass('visible')){
					$('#navlist').toggleClass('visible hidden');
				}
			};
		}
	position = scroll;
	
	});