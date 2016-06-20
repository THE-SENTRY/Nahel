(function($){

	"use strict";

	$(function(){

		var file_por_que;
		$('#agregar-imagen-por-que').on('click', function(event) {
			event.preventDefault();
	        if (file_por_que) {
	            file_por_que.open();
	            return;
	        }

	        // Create the media frame.
	        file_por_que = wp.media.frames.file_por_que = wp.media({
	            title: jQuery(this).data('uploader_title'),
	            button: {
	                text: jQuery(this).data('uploader_button_text'),
	            },
	            multiple: false 
	        });

	        file_por_que.on('select', function(){

	            var attachment = file_por_que.state().get('selection').first().toJSON();

	            var url = attachment.url;
	            var id = attachment.id;
	           	
	           	$('.img-por-que').empty().append('<img class="img-exucursion-puerto" src="'+url+'" width="266" height="150" data-id_attachmend="'+id+'">');
	           	$('#img-por-que').val(attachment.id);
	        });

	        // Finally, open the modal
	        file_por_que.open();
		});

		var file_pregunta;
		$('#agregar-imagen-pregunta').on('click', function(event) {
			event.preventDefault();
	        if (file_pregunta) {
	            file_pregunta.open();
	            return;
	        }

	        // Create the media frame.
	        file_pregunta = wp.media.frames.file_pregunta = wp.media({
	            title: jQuery(this).data('uploader_title'),
	            button: {
	                text: jQuery(this).data('uploader_button_text'),
	            },
	            multiple: false 
	        });

	        file_pregunta.on('select', function(){

	            var attachment = file_pregunta.state().get('selection').first().toJSON();

	            var url = attachment.url;
	            var id = attachment.id;
	           	
	           	$('.img-pregunta').empty().append('<img class="img-exucursion-puerto" src="'+url+'" width="266" height="150" data-id_attachmend="'+id+'">');
	           	$('#img-pregunta').val(attachment.id);
	        });

	        // Finally, open the modal
	        file_pregunta.open();
		});


		var file_descarga;
		$('#agregar-archivo-descarga').on('click', function(event) {
			event.preventDefault();
	        if (file_descarga) {
	            file_descarga.open();
	            return;
	        }

	        // Create the media frame.
	        file_descarga = wp.media.frames.file_descarga = wp.media({
	            title: jQuery(this).data('uploader_title'),
	            button: {
	                text: jQuery(this).data('uploader_button_text'),
	            },
	            multiple: false 
	        });

	        file_descarga.on('select', function(){

	            var attachment = file_descarga.state().get('selection').first().toJSON();

	            $('.descarga-url').val(attachment.url);
	            $('.descarga-name').val(attachment.filename);
	            $('.descarga-icon').val(attachment.icon);
	            $('.descarga-subtype').val(attachment.subtype);

	            $('.icon-descarga').attr('src', attachment.icon);
	            $('.url-descarga').attr('href', attachment.url).text(attachment.filename);

	        });

	        // Finally, open the modal
	        file_descarga.open();
		});


	});

})(jQuery);