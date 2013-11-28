(function($){

	"use strict";

	$(function(){



		function sendNewsletter (title, message){
			return $.post(ajax_url,{
				title: title,
				message: message,
				action: 'send_newsletter'
			}, 'json');
		}



		$('#send-newsletter').live('click', function (e) {
			e.preventDefault();

			var sendButton = $(this);

			sendButton.prop('disabled', true);


			var ajax_newsletter = sendNewsletter(
				$('#title').val(),
				$("#newsletter_content_ifr").contents().find("html").html()
			);

			ajax_newsletter.done(function (data){
				$('#newsletter-success').show();
				sendButton.prop('disabled', false);
			});
		});



	});

})(jQuery);