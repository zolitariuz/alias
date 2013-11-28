;(function($){

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
				$('#title').val(),                                           // subject
				$("#newsletter_content_ifr").contents().find("body").html(); // message
			);

			ajax_newsletter.done(function (data){
				$('#newsletter-success').show();
				sendButton.prop('disabled', false);
			});
		});



	});

})(jQuery);