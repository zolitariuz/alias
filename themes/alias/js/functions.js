(function($){

	"use strict";

	$(function(){



	// VALIDATE EMAIL ////////////////////////////////////////////////////////////////////



		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};


	// VALIDATE NUMBERS /////////////////////////////////////////////////////////////////


		window.isNumber = function (value) {
			return ! isNaN(parseInt(value, 10));
		};


	// ISOTOPE ///////////////////////////////////////////////////////////////////////////



		var $container = $('.main_isotope');

		$container.imagesLoaded(function(){
			$container.isotope({
				layoutMode : 'fitRows',
				animationEngine: 'jquery'
			});
		});


		$('.colecciones_menu a').on('click', function(){
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector });
			if (selector.charAt(0) === '#'){
				window.location.hash = $(this).attr('href');
			}else{
				window.location = $(this).attr('href');
			}
			return false;
		});



	// ISOTOPE: REGRESAR DEL SINGLE AL ARCHIVE Y FILTRAR /////////////////////////////////



		$(document).ready(function() {
			var hash = window.location.hash;
			$('.colecciones_menu a').filter(function (index, element) {
				return $(element).attr('href') == hash;
			}).addClass('active');
		});


		$(document).live('isotopeDone', function(){
			var hash = window.location.hash;
			if ( hash.charAt(0) == '#' ){
				var selector = hash.replace('#', '.');
				$('.main_isotope').isotope({ filter: selector });
			}
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
			altura_header  = $('.header').height(),
			altura_main    = altura_ventana - ( altura_header + 170 );

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


		$('form#form_buscador-404').on('click', function(){
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
				alert('Se envio el formulario de contacto');
			});
		});



	// HILIGHT ELEMENTS IN COLECCIONES SUB MENU //////////////////////////////////////////



		$('.colecciones_menu a').on('click', function () {
			$('.colecciones_menu a').removeClass('active');
			$(this).addClass('active');
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



		$('body').on('click', function (e){
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


		$('body').on('click', function (e){
			if ( ! $(e.target).hasClass('s') ){
				var form_buscador = $('#form_buscador-404');
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
		});

		function saveNewsletterEmail (email) {

			return $.post(ajax_url, {
				email: email,
				action: 'save_newsletter_email'
			}, 'json');

		}


/*		function alert_email_saved(){
			if (language === 'es'){
				alert('Gracias, se guardo correctamente tu direccion de correo');
			} else if (language === 'en'){
				alert('Thank you, your email was successfully saved');
			}
		}


		function alert_email_not_valid(){
			if (language === 'es'){
				alert('Porfavor ingresa una direccion de correo valida');
			} else if (language === 'en'){
				alert('Please enter valid email address');
			}
		}*/


		$('form.form_newsletter').on('submit', function (e) {
			e.preventDefault();
			var email = $('.form_newsletter_input').val();

			if ( validateEmail(email) ){
				var newMail = saveNewsletterEmail(email);

				newMail.done(function (data) {
					$('.form_newsletter_input').val('');
					alert( i18n.email_saved );
				});
			}else{
				alert( i18n.email_invalid );
			}
		});



/*
	8888888b.                   d8b          888
	888   Y88b                  Y8P          888
	888    888                               888
	888   d88P .d88b.   .d88b.  888 .d8888b  888888 888d888 .d88b.
	8888888P" d8P  Y8b d88P"88b 888 88K      888    888P"  d88""88b
	888 T88b  88888888 888  888 888 "Y8888b. 888    888    888  888
	888  T88b Y8b.     Y88b 888 888      X88 Y88b.  888    Y88..88P
	888   T88b "Y8888   "Y88888 888  88888P'  "Y888 888     "Y88P"
	                        888
	                   Y8b d88P
	                    "Y88P"
 */



 		var $registerForm = $('#forma_registro').hide();

		$registerForm.on('click', function (e) {
			e.preventDefault();
			console.log( $(this).serialize() );
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



		/**
		 * Agregar un elemento al carrito de compras
		 * @param {int} product_id
		 */
		function add_to_shoping_cart (product_id) {
			return $.post(ajax_url, {
				product_id: product_id,
				action: 'add_product_to_shopping_cart'
			},'json');
		}


		function show_cart_tooltip (element) {
			element.poshytip({
				content: i18n.cart_updated,
				className: 'tip-twitter',
				showOn: 'none',
				alignTo: 'target',
				alignX: 'inner-left',
				offsetX: -50,
				offsetY: 12
			});
			element.poshytip('showDelayed', 400);
			setTimeout(function(){
				element.poshytip('hide');
			}, 4000);
		}


		$('.carrito, .tip-twitter').live('mouseenter', function(){
			$('.carrito_img').poshytip('hideDelayed', 400);
		});


		/**
		 * Cambiar el total de elemntos en el carrito de compras
		 * @param  {int} value    Valor que se sumara/restara del total
		 * @return {int} newTotal Nuevo total
		 */
		function change_cart_total (value) {
			var totalContainer = $('#carrito-total'),
				currentTotal   = parseInt(totalContainer.text(), 10),
				newTotal       = currentTotal + value;

			totalContainer.text( newTotal );

			show_cart_tooltip( $('.carrito_img') );

			return newTotal;
		}



	// AGREGAR AL CARRITO BUTTON ////////////////////////////////////////////////////////



		$('button#add_to_cart').on('click', function (e) {

			e.preventDefault();

			var post_id    = $(this).data('post_id'),
				addProduct = add_to_shoping_cart( post_id );

			addProduct.done(function (object) {
				if ( isNumber(object.data) ){
					change_cart_total( parseInt(object.data, 10) );
					$(document).scrollTop(0);
				}
			});


			addProduct.always(function (data, textStatus, errorThrown){
				if ( data.status == 200 ){
					change_cart_total(1);
					$(document).scrollTop(0);
				}
			});

		});




	// CAMBIAR EL TIPO DE MONEDA EN EL CONTENEDOR SUBTOTAL //////////////////////////////



		function subtotalContainerCurrency (currency_code) {
			$('.moneda, .precio').hide();
			$('.'+currency_code).show();
		}


	// COMPRAR AHORA BUTTON /////////////////////////////////////////////////////////////



		$('button#buy_now').on('click', function () {

			var post_id    = $(this).data('post_id'),
				addProduct = add_to_shoping_cart( post_id );

			addProduct.done(function (object) {
				console.log(object);
				if ( isNumber(object.data) ){
					window.location.href = site_url+'/carrito-de-compra/?lang='+language;
				}
			});

		});



		$('.select-currency').live('change', function () {

			var currency_code = $(this).val();

			subtotalContainerCurrency(currency_code);

			$('.select-currency').each(function (index, select) {

				$('option', this).filter(function (key, option){
					return $(option).val() === currency_code;
				}).prop('selected', true);

			});

			$('.select-currency').trigger('chosen:updated');
		});



	// COMPRAR BUTTON ///////////////////////////////////////////////////////////////////



		$('button#comprar').on('click', function () {

			$('div.carrito_content').hide();
			$('div.carrito_total').hide();
			$('form#forma_registro').show();



			/*var language_code = $('.select-currency :selected').data('lc'),
				currency_code = $('.select-currency :selected').val();

			var createPayPalForm = PayPal.init({
				lc: language_code,
				currency_code: currency_code,
				custom: {
					pais: pais
				}
			});

			createPayPalForm.done(function () {
				PayPal.submit();
			});*/

		});



	// CHOSEN ///////////////////////////////////////////////////////////////////////////


		/**
		 * Busca que el selector exista en el DOM y que sea visible
		 * @param  {string}  selector
		 * @return {boolean}
		 */
		function findElement (selector) {
			return ( $(selector).length > 0 && $(selector).is(":visible") == true );
		}


		$(document).ready(function(){

			if ( findElement('#pais') ){
				$('#pais').chosen();
			}

			if ( findElement('#estado') ){
				$('#estado').chosen();
			}

			if ( findElement('.select-currency') ){
				$('.select-currency').chosen();
			}

		});



	});

})(jQuery);


