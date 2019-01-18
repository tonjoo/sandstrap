(function ($) {

	$(document).ready(function() {
		/* Data toggle Collapse
		-------------------------------------------- */
		var ev = 'click';
		if ('ontouchstart' in window) {
			ev = 'touchstart';
		}
		$(document).on(ev, function() {
			$('[data-toggle="collapse"]').each(function() {
				if ($(this).is(':visible')) {
					var animation = $(this).data('animation');
					var target = $(this).data('target');

					if (animation == null) {
						animation = 'true';
					}

					$(this).addClass('collapsed');
					$(target).removeClass('show');

					if (animation) {
						$(target).stop().slideUp();
					}

					$(target).trigger('hidden.collapse');
				}
			});
		});
		$('[data-toggle="collapse"]').each(function() {
			var target = $(this).data('target');

			$(target).on(ev, function(e) {
				e.stopPropagation();
			});
		});
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
					$(target).stop().slideDown();
				}
			} else {
				$(target).trigger('hidden.collapse');
				
				if (animation) {
					$(target).stop().slideUp();
				}
			}

			e.stopPropagation();
			e.preventDefault();
		});

		$('[data-toggle="collapse"]').on(ev, function(e) {
			e.stopPropagation();
		});
		$('.navbar-close, .navbar-overlay').on(ev, function(e) {
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

	function collapseHide(elm) {
		var animation = $('[data-target="'+ elm +'"').data('animation');

		if (animation == null) {
			animation = 'true';
		}

		$(elm).removeClass('show');
		$('[data-target="'+ elm +'"').addClass('collapsed');

		if (animation) {
			$(elm).stop().slideUp();
		}

		$(elm).trigger('hidden.collapse');
	}
	function collapseShow(elm) {
		var animation = $('[data-target="'+ elm +'"').data('animation');

		if (animation == null) {
			animation = 'true';
		}

		$(elm).addClass('show');
		$('[data-target="'+ elm +'"').removeClass('collapsed');

		if (animation) {
			$(elm).stop().slideDown();
		}

		$(elm).trigger('show.collapse');
	}

}(jQuery));