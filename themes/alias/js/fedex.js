(function($){

	"use_strict";

	$(function(){


		window.FedEx = {};


		FedEx.init = function () {
			FedEx.setPackages(1);
		};


		FedEx.setPackages = function (count) {
			FedEx.packages = count;
			$(window).trigger('changePackages');
		};



		FedEx.updateModel = function (data) {
			FedEx.form = $.extend({}, FedEx.form, data);
		};


		$(window).live('changePackages', function (event) {
			FedEx.updateModel({ 'noOfPackages': FedEx.packages });
		});


		$('iframe').load(function(){
			$('iframe').contents().find('#noOfPackages').bind('change',function(e) {
				title_name = $(this).val();
				$('input#edit-title').val(title_name);
			});
		});



		/*
		$('#tblGetRates .Buttons').on('click', function (e) {
			e.preventDefault();
			getRates !!!
		});
		*/




	});

})(jQuery);