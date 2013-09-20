(function($){

	"use strict";

	$(function(){

		//Sidebar
		var altura_main;
		setTimeout(function(){
			var altura_main = $('.main').height();
			if ( altura_main > 200 ){
				$('.sidebar').height(altura_main);
			}
		},100);

		//Buscador
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

		//Newsletter
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

			console.log(e.target);

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

		//Footer y sidebar
		var altura_ventana = $(window).height(),
			altura_header = $('.header').height(),
			altura_main = altura_ventana - ( altura_header + 170 );
		console.log(altura_main);
		$('.main').css( 'min-height', altura_main );


	});

})(jQuery);


