jQuery(function($) {
	$(document).on('click', 'a[href*="#"]:not([href="#"])', function(e) {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 500);
			}
		}
	});
});