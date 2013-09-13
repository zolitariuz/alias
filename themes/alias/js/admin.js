(function($){

	"use strict";

	$(function(){


	// AJAX UPDATE POST META /////////////////////////////////////////////////////////////



		function update_post_meta(post_id, meta_key, meta_value) {
			return $.post(ajax_url, {
				post_id: post_id,
				meta_key: meta_key,
				meta_value: meta_value,
				action: 'ajax_update_post_meta'
			}, 'JSON');
		}



	// AJAX UPDATE DISTRIBUIDOR LINK /////////////////////////////////////////////////////



		$('input.guardar_link').on('click', function(){
			var post_id    = $(this).data('post_id'),
				meta_value = $(this).prev('.distribuidor_link').val();

			update_post_meta( post_id, '_distribuidor_link', meta_value );
		});


	});

})(jQuery);