(function ($) {

	$(function(){

		// fix sub nav on scroll
		var $win = $(window),
			$body = $('body'),
			$nav = $('.navbar'),
			navHeight = 0,
			subnavHeight = $('.navbar').first().height(),
			subnavTop = $('.navbar').length && $('.navbar').offset().top - navHeight,
			marginTop = parseInt($body.css('margin-top'), 10);
			isFixed = 0;

		processScroll();

		$win.on('scroll', processScroll);

		function processScroll() {
			var i, scrollTop = $win.scrollTop();
			if (scrollTop >= subnavTop && !isFixed) {
				isFixed = 1;
				$nav.addClass('navbar-fixed-top');
				$body.css('margin-top', marginTop + subnavHeight + 'px');
				$('.navbar').css('margin', '0 auto');
			} else if (scrollTop <= subnavTop && isFixed) {
				isFixed = 0;
				$nav.removeClass('navbar-fixed-top');
				$body.css('margin-top', marginTop + 'px');
				$('.navbar').css('margin-left', '0px');
			}
		}
		
	});
})($);

