(function($){

	"use_strict";

	$(function(){

		var pauseButton, playButton;

		var iframeElements = document.querySelector('iframe');

		var soundCloudWidgets = [];


		$('iframe').each(function (index, element){
			soundCloudWidgets[index] = SC.Widget(element);
		});


		$(document).ready(function(){

			$('.pause').hide();

			setTimeout(function(){
				$.each(soundCloudWidgets, function (index){
					this.getCurrentSound(function (sound){
						var title = $('<p></p>', {
							text: sound.title
						});
						$('.play[data-index="'+index+'"]').after(title);
					});
				});
			},200);



			$('.play').on('click', function() {
				$(this).hide();
				$(this).next('.pause').show();
				var index = $(this).data('index');
				soundCloudWidgets[index].play();
			});


			$('.pause').on('click', function() {
				$(this).hide();
				$(this).prev('.play').show();
				var index = $(this).data('index');
				soundCloudWidgets[index].pause();
			});

		});


	});

})(jQuery);