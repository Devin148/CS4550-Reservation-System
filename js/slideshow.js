;(function($) {

	$.fn.Slideshow = function() {
		var slides = $("#slides").children();
		var total = slides.length;
		var i = 0;

		var next_slide = slides[(++i > total) ? 0 : i];
		var curr_slide = slides[0];
		var prev_slide = slides[total];

		function init() {

			if (total > 1) {
				// Switch the slides
				$(curr_slide).fadeOut(300);
				$(next_slide).fadeIn(300);

				// Update the variables
				prev_slide = curr_slide;
				curr_slide = next_slide;
				next_slide = slides[(++i >= total) ? 0 : i];
				if (i >= total) i = 0;

				// Repeat
				setTimeout(init, 7000);
			}
		}

		// Begin
		setTimeout(init, 7000);
	}


})(jQuery);