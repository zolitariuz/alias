(function($){

	"use strict";

	$(function(){



		// VALIDATE EMAIL
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};


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
			$(this).css({ 'background-color': 'black' });
			$(this).find('p').hide();
			$(this).find('.newsletter_img').css({ 'background-position': '-14px -11px' });

			$(this).find('.form_newsletter').show();
			$('.form_newsletter_input').focus();
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
				$(newsletter).css({ 'background-color': 'white' });
				$(newsletter).find('p').show();
				$(newsletter).find('.newsletter_img').css({ 'background-position': '-14px 2px'});

				$(newsletter).find('.form_newsletter').hide();

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



		// FOOTER Y SIDEBAR //////////////////////////////////////////////////////////////////



			var altura_ventana = $(window).height(),
				altura_header = $('.header').height(),
				altura_main = altura_ventana - ( altura_header + 170 );

			$('.main').css( 'min-height', altura_main );



		// ISOTOPE ///////////////////////////////////////////////////////////////////////////



			var container = $('.main');
			container.isotope({
				animationEngine: 'jquery'
			});
			$('.colecciones_menu a').click(function(){
				var selector = $(this).attr('data-filter');
				container.isotope({ filter: selector });
				window.location.hash = $(this).attr('href');
				return false;
			});



		// BOTONES DE PLAY Y PAUSE ///////////////////////////////////////////////////////////



			$('.audio').on('click', function () {
				$('.play').toggle();
				$('.pause').toggle();
			});



		// FORMULARIO PARA EL NEWSLETTER /////////////////////////////////////////////////////



			function saveNewsletterEmail (email) {

				return $.post(ajax_url,{
					email: email,
					action: 'save_newsletter_email'
				},'json');

			}


			$('.form_newsletter').on('submit', function (e) {
				e.preventDefault();
				var email = $('.form_newsletter_input').val();

				if ( validateEmail(email) ){
					var newMail = saveNewsletterEmail(email);

					newMail.done(function (data) {
						$('.form_newsletter_input').val('');
						alert('Gracias, se guardo correctamente tu direccion de correo');
					});

				}else{
					alert('Porfavor ingresa una direccion de correo valida');
				}
			});



	});

})(jQuery);


