(function ($) {

	$(document).ready(function() {
		if ($('.header-fixed').length) {
			var headerHeight = $('.header-fixed').outerHeight();

			$('body').addClass('wrapper-header-fixed').css('padding-top', headerHeight);
		}
	});

}(jQuery));