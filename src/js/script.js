(function ($) {

	$(document).ready(function() {
		scrollTopDisplay();

		/* Data toggle Collapse
		-------------------------------------------- */
		$('[data-toggle="collapse"]').on('click', function(e) {
			var target = $(this).data('target');
			var animation = $(this).data('animation');

			if (animation == null) {
				animation = 'true';
			}

			$(this).toggleClass('collapsed');
			$(target).toggleClass('show');

			if ($(target).hasClass('show')) {
				$(target).trigger('show.collapse');

				if (animation) {
					$(target).slideDown();
				}
			} else {
				$(target).trigger('hidden.collapse');
				
				if (animation) {
					$(target).slideUp();
				}
			}

			e.preventDefault();
			e.stopPropagation();
		});
		$('body').on('click', function() {
			$('[data-toggle="collapse"').each(function() {
				if ($(this).is(':visible')) {
					var animation = $(this).data('animation');
					var target = $(this).data('target');

					if (animation == null) {
						animation = 'true';
					}

					$(this).addClass('collapsed');
					$(target).removeClass('show');

					if (animation) {
						$(target).slideUp();
					}

					$(target).trigger('hidden.collapse');
				}
			});
		});
		$('.navbar-collapse').on('click', function(e) {
			e.stopPropagation();
		});

		$('.navbar-close, .navbar-overlay').on('click', function(e) {
			collapseHide('#navbar');

			e.stopPropagation();
		});
		$('#navbar').on('hidden.collapse', function () {
			$('body').removeClass('navbar-open');
		});
		$('#navbar').on('show.collapse', function () {
			$('body').addClass('navbar-open');
		});
	});

}(jQuery));