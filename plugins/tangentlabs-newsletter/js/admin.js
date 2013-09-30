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



		$('#send-newsletter').on('click', function (e) {
			e.preventDefault();

			var ajax_newsletter = sendNewsletter(
				$('#title').val(),               // title
				$('#newsletter_content').val()   // message
			);

			ajax_newsletter.done(function (data){
				console.log(data);
				alert('Se envio el newsletter');
			})
		});



	});

})(jQuery);