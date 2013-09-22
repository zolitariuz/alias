(function($){

	"use_strict";

	$(function(){

		var pauseButton, playButton;

		$('iframe').hide();


		var iframeElement = document.querySelector('iframe'),
			soundCloud    = SC.Widget(iframeElement);


		$(document).ready(function(){

			pauseButton = $('.pause'),1
			playButton  = $('.play');


			playButton.on('click', function() {
				console.log('playButton');
				soundCloud.play();
			});

			pauseButton.on('click', function() {
				console.log('pauseButton');
				soundCloud.pause();
			});
		})


	});

})(jQuery);