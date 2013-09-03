$(function(){
	"use strict";

	//Sidebar
	var altura_main;
	setTimeout(function(){
		var altura_main = $('.main').height();
		console.log(altura_main);

		if ( altura_main > 200 ){
			$('.sidebar').height(altura_main);
			console.log('entró');
		}
	},100)



});