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



		var container = $('.main.libros');

		container.imagesLoaded( function () {
			container.isotope({
				animationEngine: 'jquery'
			});
			$(document).trigger('isotopeDone');
		});

		$('.colecciones_menu a').on('click', function(){
			var selector = $(this).attr('data-filter');
			container.isotope({ filter: selector });
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
				$('.main.libros').isotope({ filter: selector });
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

			return newTotal;
 		}



	// AGREGAR AL CARRITO BUTTON ////////////////////////////////////////////////////////



		$('button#add_to_cart').on('click', function (e) {

			e.preventDefault();

			var post_id    = $(this).data('post_id'),
				addProduct = add_to_shoping_cart( post_id );

			addProduct.done(function (object) {
				if ( isNumber(object.data) ){
					alert('Agregaste a tu carrito 1 libro');
					change_cart_total( parseInt(object.data, 10) );
				}
			});

		});



	// COMPRAR AHORA BUTTON /////////////////////////////////////////////////////////////



		$('button#buy_now').on('click', function () {

			var post_id    = $(this).data('post_id'),
				addProduct = add_to_shoping_cart( post_id );

			addProduct.done(function (object) {
				if ( isNumber(object.data) ){
					window.location.href = site_url+'/carrito-de-compra/?lang='+language;
				}
			});

		});



		$('.select-currency').on('change', function () {

			var currency_code = $(this).val();

			$('.select-currency').each(function (index, select) {

				$('option', this).filter(function (key, option){
					return $(option).val() === currency_code;
				}).prop('selected', true);

			});

			$('.select-currency').trigger('chosen:updated');
		});


	// COMPRAR BUTTON ///////////////////////////////////////////////////////////////////



		$('button#comprar').on('click', function () {

			var language_code = $('.select-currency :selected').data('lc'),
				currency_code = $('.select-currency :selected').val(),
				pais          = $('#pais').val(),
				estado        = $('#estado').val(),
				cp            = $('#codigo_postal').val();

			var createPayPalForm = PayPal.init({
				lc: language_code,
				currency_code: currency_code,
				custom: {
					pais: pais,
					estado: estado,
					cp: cp
				}
			});

			createPayPalForm.done(function () {
				PayPal.submit();
			});

		});



	// CHOSEN ///////////////////////////////////////////////////////////////////////////


		$(document).ready(function(){

			if( $('#pais').lenght > 0 ){
				$('#pais').chosen();
			}

			if( $('#estado').lenght > 0 ){
				$('#estado').chosen();
			}

			if( $('.currency').lenght > 0 ){
				$('.currency').chosen();
			}

		});

		$('.currency').chosen();



	});

})(jQuery);


