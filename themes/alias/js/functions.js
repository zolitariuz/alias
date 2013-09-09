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





	});

})(jQuery);


