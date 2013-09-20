(function($){

	"use_strict";

	$(function(){


		$('iframe').hide();

		var iframeElement = document.querySelector('iframe'),
			soundCloud    = SC.Widget(iframeElement);

		$('.play').live('click', function() {
			soundCloud.play();
		});


		$('.pause').live('click', function() {
			soundCloud.pause();
		});


	});

})(jQuery);