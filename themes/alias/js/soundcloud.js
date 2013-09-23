(function($){

	"use_strict";

	$(function(){

		var pauseButton, playButton;

		$('iframe').hide();


		var iframeElement = document.querySelector('iframe'),
			soundCloud    = SC.Widget(iframeElement);


		$(document).ready(function(){

			pauseButton = $('.pause').hide(),
			playButton  = $('.play');


			playButton.on('click', function() {
				playButton.hide();
				pauseButton.show();
				soundCloud.play();
			});

			pauseButton.on('click', function() {
				playButton.show();
				pauseButton.hide();
				soundCloud.pause();
			});

		});


	});

})(jQuery);