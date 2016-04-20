<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		add_meta_box( 'meta-box-extras_noticia', 'Extras Noticia', 'show_metabox_extras_noticia', 'post', 'side', 'high');

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function show_metabox_extras_noticia($post){
		wp_nonce_field(__FILE__, '_extras_noticia_nonce');

		$check = get_post_meta( $post->ID, 'noticia-destacada', true );
		$checked_1 = $check == 'si' ? 'checked' : ''; 

		echo '<input type="checkbox" name="noticia-destacada" value="si" '.$checked_1.' > Noticia destacada';
	}



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)) 
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ) 
			return $post_id;
		
		
		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) ) 
			return $post_id;


		if ( isset($_POST['_name_meta']) and check_admin_referer(__FILE__, '_name_meta_nonce') ){
			update_post_meta($post_id, '_name_meta', $_POST['_name_meta']);
		}


		// Guardar correctamente los checkboxes
		if ( isset($_POST['noticia-destacada']) and check_admin_referer(__FILE__, '_extras_noticia_nonce') ){
			update_post_meta($post_id, 'noticia-destacada', $_POST['noticia-destacada']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, 'noticia-destacada');
		}


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
