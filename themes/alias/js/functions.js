(function($){

	"use strict";

	$(function(){



	// VALIDATE EMAIL ////////////////////////////////////////////////////////////////////



		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};



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



	// ALTURA DINAMICA DEL SIDEBAR ///////////////////////////////////////////////////////



		var altura_main;
		setTimeout(function(){
			var altura_main = $('.main').height();
			if ( altura_main > 200 ){
				$('.sidebar').height(altura_main);
			}
		},100);



	// FOOTER Y SIDEBAR //////////////////////////////////////////////////////////////////



		var altura_ventana = $(window).height(),
			altura_header = $('.header').height(),
			altura_main = altura_ventana - ( altura_header + 170 );

		$('.main').css( 'min-height', altura_main );



	// SEARCH FORM ANIMATIONS ////////////////////////////////////////////////////////////



		$('form#form_buscador').on('click', function(){
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



	// FORMULARIO DE CONTACTO ////////////////////////////////////////////////////////////


		$('form#forma_contacto').on('submit', function (e) {
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



/*
	                                         888          888    888
	                                         888          888    888
	                                         888          888    888
	88888b.   .d88b.  888  888  888 .d8888b  888  .d88b.  888888 888888 .d88b.  888d888
	888 "88b d8P  Y8b 888  888  888 88K      888 d8P  Y8b 888    888   d8P  Y8b 888P"
	888  888 88888888 888  888  888 "Y8888b. 888 88888888 888    888   88888888 888
	888  888 Y8b.     Y88b 888 d88P      X88 888 Y8b.     Y88b.  Y88b. Y8b.     888
	888  888  "Y8888   "Y8888888P"   88888P' 888  "Y8888   "Y888  "Y888 "Y8888  888
 */


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


		function saveNewsletterEmail (email) {

			return $.post(ajax_url, {
				email: email,
				action: 'save_newsletter_email'
			}, 'json');

		}


		$('form.form_newsletter').on('submit', function (e) {
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





/*
	         888                        d8b                                                  888
	         888                        Y8P                                                  888
	         888                                                                             888
	.d8888b  88888b.   .d88b.  88888b.  888 88888b.   .d88b.        .d8888b  8888b.  888d888 888888
	88K      888 "88b d88""88b 888 "88b 888 888 "88b d88P"88b      d88P"        "88b 888P"   888
	"Y8888b. 888  888 888  888 888  888 888 888  888 888  888      888      .d888888 888     888
	     X88 888  888 Y88..88P 888 d88P 888 888  888 Y88b 888      Y88b.    888  888 888     Y88b.
	 88888P' 888  888  "Y88P"  88888P"  888 888  888  "Y88888       "Y8888P "Y888888 888      "Y888
	                           888                        888
	                           888                   Y8b d88P
	                           888                    "Y88P"
 */



 		function add_to_shoping_cart (product_id) {

 			return $.post(ajax_url, {
 				product_id: product_id,
 				action: 'add_product_to_shopping_cart'
 			},'json');
 		}

		$('button#add_to_cart').on('click', function (e) {

			e.preventDefault();

			var post_id    = $(this).data('post_id'),
				addProduct = add_to_shoping_cart( post_id );

			addProduct.done(function (data) {
				console.log(data);
			});

		});


		// CHOSEN ///////////////////////////////////////////////////////////////////////////



			$('#pais').chosen();



	});

})(jQuery);


