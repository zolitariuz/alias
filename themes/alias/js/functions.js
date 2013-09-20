(function($){

	"use strict";

	$(function(){


		// SIDEBAR
		var altura_main;
		setTimeout(function(){
			var altura_main = $('.main').height();
			if ( altura_main > 200 ){
				$('.sidebar').height(altura_main);
			}
		},100);


		// BUSCADOR
		$('#form_buscador').on('click', function(){
			$(this).css({
				'background-color': 'black'
			});
			$(this).find('input').css({
				'background-color': 'black',
				'color': 'white'
			});
			$(this).find('#submit').css({
				'background-position': '0px -13px'
			});
		});

		// NEWSLETTER
		$('.newsletter').on('click', function(){
			$(this).css({
				'background-color': 'black'
			});
			$(this).find('p').css({
				'color': 'white'
			});
			$(this).find('.newsletter_img').css({
				'background-position': '-14px -11px'
			});
		});




		$('body').on('click', function(e){

			if ( ! $(e.target).hasClass('s') ){
				var form_buscador = $('#form_buscador');
				$(form_buscador).css({
					'background-color': 'white'
				});
				$(form_buscador).find('input').css({
					'background-color': 'white',
					'color': 'black'
				});
				$(form_buscador).find('#submit').css({
					'background-position': '0px 0px'
				});
			}

			if ( ! $(e.target).hasClass('newsletter') ){
				var newsletter = $('.newsletter');
				$(newsletter).css({
					'background-color': 'white'
				});
				$(newsletter).find('p').css({
					'color': 'black'
				});
				$(newsletter).find('.newsletter_img').css({
					'background-position': '-14px 2px'
				});
			}

		});



		// FORMA DE CONTACTO /////////////////////////////////////////////////////////////////



			$('#forma_contacto').on('submit', function (e) {
				e.preventDefault();

				var form_fields = $(this).serialize();


				console.log(ajax_url+'/?'+form_fields);

				$.post(ajax_url+'/?'+form_fields,{
					action: 'formulario_contacto_enviado'
				}, 'json')

				.done(function (data) {
					console.log(data);
				});

			});


	});

})(jQuery);


