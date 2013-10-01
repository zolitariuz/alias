(function($){

	"use_strict";

	$(function(){


		window.PayPal = {
			Config: {
				cmd           : '_cart',
				upload        : '1',
				business      : 'informes@aliaseditorial.com',
				tax_cart      : '0',
				notify_url    : site_url+'/paypal-ipn/',
				return        : site_url,
				rm            : '2',
				cbt           : 'Regresar a Alias',
				cancel_return : site_url+'/carrito-de-compras/'
			}
		};


		PayPal.getCurrency = function () {
			switch (PayPal.Config.currency_code) {
				case 'MXN'  : return 'pesos';
				case 'USD'  : return 'dolares';
				case 'EURO' : return 'euros';
				default     : return 'pesos';
			}
		};

		PayPal.getProducts = function () {

			var currency = PayPal.getCurrency();

			return $.get(ajax_url, {
				currency: currency,
				action: 'get_paypal_products'
			}, 'json')
		};


		PayPal.createForm = function () {
			PayPal.Form = $('<form></form>', {
				method: 'POST',
				action: 'https://www.paypal.com/cgi-bin/webscr'
			});
		};


		PayPal.addInputsFromObject = function (object) {
			$.each(object, function (key, value) {
				PayPal.addInput(key, value);
			});
		};

		PayPal.addInput = function (key, value) {
			var newInput = $("<input></input>",{
				name  : key,
				value : value
			});
			PayPal.Form.append( newInput );
		};


		PayPal.addProduct = function (index, product){
			$.each(product, function (key, value) {
				PayPal.addInput( key+'_'+index, value );
			});
		};


		PayPal.init = function (config){

			var deferred = $.Deferred();

			PayPal.createForm();

			PayPal.Config = $.extend({}, PayPal.Config, config);

			PayPal.addInputsFromObject( PayPal.Config );

			var ajax_products = PayPal.getProducts();

			ajax_products.done(function(data){
				if (data){
					$.each(data, function (index, value) {
						PayPal.addProduct( (index+1), value );
					});
					deferred.resolve();
				}else{
					deferred.fail();
				}
			});

			return deferred.promise();

		};


		PayPal.submit = function (){
			this.Form.submit();
		};



	});

})(jQuery);