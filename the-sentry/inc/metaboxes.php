<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){
		global $post;
		add_meta_box( 'meta-box-extras_noticia', 'Extras Noticia', 'show_metabox_extras_noticia', 'post', 'side', 'high');
		add_meta_box( 'meta-box-extras_sucursal', 'Extras', 'show_metabox_extras_sucursal', 'plaza');
		add_meta_box( 'meta-box-extras_sucursal', 'Extras', 'show_metabox_extras_sucursal', 'concesionaria');
		add_meta_box( 'meta-box-extras_sucursal', 'Extras', 'show_metabox_extras_sucursal', 'tienda');
		add_meta_box( 'meta-box-archivo_descarga', 'Archivo descarga', 'show_metabox_archivo_descarga', 'descarga', 'side', 'high');



		if ($post->post_name == 'radikal'):
			add_meta_box( 'meta-box-imagen_por_que', 'Imagen por que radikal', 'show_metabox_imagen_por_que', 'page', 'side', 'low' );
			add_meta_box( 'meta-box-imagen_pregunta_radikal', 'Imagen Pregunta a Radikal', 'show_metabox_imagen_pregunta_radikal', 'page', 'side', 'low' );
		endif;

		if ($post->post_name == 'contacto'):
			add_meta_box( 'meta-box-extras_contacto', 'Extras', 'show_metabox_extras_contacto', 'page');
		endif;
	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function show_metabox_extras_noticia($post){
		wp_nonce_field(__FILE__, '_extras_noticia_nonce');

		$check = get_post_meta( $post->ID, 'noticia-destacada', true );
		$checked_1 = $check == 'si' ? 'checked' : ''; 

		echo '<input type="checkbox" name="noticia-destacada" value="si" '.$checked_1.' > Noticia destacada';
	}

	function show_metabox_imagen_por_que($post){
		wp_nonce_field(__FILE__, 'imagen_por_que_nonce');
		$imagen_por_que = get_post_meta( $post->ID, 'imagen_por_que', true );
		$html = '<input type="hidden" id="img-por-que" name="imagen_por_que" class="widefat" value="'.$imagen_por_que.'">';
		$html .= '<div class="img-por-que img-extra-post">';
			if ($imagen_por_que != '') :
				$html .= wp_get_attachment_image( $imagen_por_que, 'medium' );
			endif;
		$html .= '</div>';
		if ($imagen_por_que != ''):
			$html .= '<a href="#" id="agregar-imagen-por-que">Cambiar Imagen</a>';
		else:
			$html .= '<a href="#" id="agregar-imagen-por-que">Agregar Imagen</a>';
		endif;
		
		echo $html;
	}

	function show_metabox_imagen_pregunta_radikal($post){
		wp_nonce_field(__FILE__, 'imagen_pregunta_nonce');
		$imagen_pregunta = get_post_meta( $post->ID, 'imagen_pregunta', true );
		$html = '<input type="hidden" id="img-pregunta" name="imagen_pregunta" class="widefat" value="'.$imagen_pregunta.'">';
		$html .= '<div class="img-pregunta img-extra-post">';
			if ($imagen_pregunta != '') :
				$html .= wp_get_attachment_image( $imagen_pregunta, 'medium' );
			endif;
		$html .= '</div>';
		if ($imagen_pregunta != ''):
			$html .= '<a href="#" id="agregar-imagen-pregunta">Cambiar Imagen</a>';
		else:
			$html .= '<a href="#" id="agregar-imagen-pregunta">Agregar Imagen</a>';
		endif;
		

		echo $html;
	}

	function show_metabox_extras_contacto($post){
		wp_nonce_field(__FILE__, 'extras_contacto_nonce');
		$texto_contacto = get_post_meta( $post->ID, 'texto_contacto', true );

		echo "<label for='texto_contacto' class='label-paquetes'>Texto: </label>";
		echo "<input type='text' name='texto_contacto' class='widefat' value='".$texto_contacto."' id='texto_contacto'/>";

		$telefono_contacto = get_post_meta( $post->ID, 'telefono_contacto', true );

		echo "<label for='telefono_contacto' class='label-paquetes'>Teléfono: </label>";
		echo "<input type='text' name='telefono_contacto' class='widefat' value='".$telefono_contacto."' id='telefono_contacto'/>";

		$fax_contacto = get_post_meta( $post->ID, 'fax_contacto', true );

		echo "<label for='fax_contacto' class='label-paquetes'>Fax: </label>";
		echo "<input type='text' name='fax_contacto' class='widefat' value='".$fax_contacto."' id='fax_contacto'/>";

		$mail_contacto = get_post_meta( $post->ID, 'mail_contacto', true );

		echo "<label for='mail_contacto' class='label-paquetes'>Mail: </label>";
		echo "<input type='text' name='mail_contacto' class='widefat' value='".$mail_contacto."' id='mail_contacto'/>";

		$direccion_contacto = get_post_meta( $post->ID, 'direccion_contacto', true );

		echo "<label for='direccion_contacto' class='label-paquetes'>Dirección: </label>";
		echo "<input type='text' name='direccion_contacto' class='widefat' value='".$direccion_contacto."' id='direccion_contacto'/>";
	}


	function show_metabox_extras_sucursal($post){
		wp_nonce_field(__FILE__, 'extras_sucursal_nonce');

		$telefono_sucursal = get_post_meta( $post->ID, 'telefono_sucursal', true );

		echo "<label for='telefono_sucursal' class='label-paquetes'>Teléfono: </label>";
		echo "<input type='text' name='telefono_sucursal' class='widefat' value='".$telefono_sucursal."' id='telefono_sucursal'/>";

		$direccion_sucursal = get_post_meta( $post->ID, 'direccion_sucursal', true );

		echo "<label for='direccion_sucursal' class='label-paquetes'>Dirección: </label>";
		echo "<input type='text' name='direccion_sucursal' class='widefat' value='".$direccion_sucursal."' id='direccion_sucursal'/>";
	}


	function show_metabox_archivo_descarga($post){
		wp_nonce_field(__FILE__, 'archivo_descarga_nonce');
		$archivo_descarga = get_post_meta( $post->ID, 'archivo_descarga', true );
		$icon = isset($archivo_descarga['icon']) ? $archivo_descarga['icon'] : '';
		$name = isset($archivo_descarga['name']) ? $archivo_descarga['name'] : '';
		$url = isset($archivo_descarga['url']) ? $archivo_descarga['url'] : '';
		$subtype = isset($archivo_descarga['subtype']) ? $archivo_descarga['subtype'] : '';
		
		$html = '';
		$html .= '<img class="icon-descarga" src="'.$icon.'" >';
		$html .= '<h3><a href="'.$url.'" target="_blank" class="url-descarga">'.$name.'</a></h3>';

		if ($archivo_descarga != ''):
			$html .= '<a href="#" id="agregar-archivo-descarga">Cambiar descarga</a>';
		else:
			$html .= '<a href="#" id="agregar-archivo-descarga">Agregar descarga</a>';
		endif;

		$html .= '<input type="hidden" name="archivo_descarga[url]" class="widefat descarga-url" value="'.$url.'">';
		$html .= '<input type="hidden" name="archivo_descarga[name]" class="widefat descarga-name" value="'.$name.'">';
		$html .= '<input type="hidden" name="archivo_descarga[icon]" class="widefat descarga-icon" value="'.$icon.'">';
		$html .= '<input type="hidden" name="archivo_descarga[subtype]" class="widefat descarga-subtype" value="'.$subtype.'">';

		echo $html;
	}


// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)) 
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ) 
			return $post_id;
		
		
		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) ) 
			return $post_id;


		if (isset($_POST['imagen_por_que']) AND check_admin_referer(__FILE__, 'imagen_por_que_nonce')) {
			update_post_meta( $post_id, 'imagen_por_que', $_POST['imagen_por_que'] );
		}

		if (isset($_POST['imagen_pregunta']) AND check_admin_referer(__FILE__, 'imagen_pregunta_nonce')) {
			update_post_meta( $post_id, 'imagen_pregunta', $_POST['imagen_pregunta'] );
		}

		if (isset($_POST['archivo_descarga']) AND check_admin_referer(__FILE__, 'archivo_descarga_nonce')) {
			file_put_contents(
				'/Users/alejandrosandoval/Desktop/php.txt',
				var_export($_POST['archivo_descarga'], true )
			);
			update_post_meta( $post_id, 'archivo_descarga', $_POST['archivo_descarga'] );
		}

		

		if (isset($_POST['texto_contacto']) AND check_admin_referer(__FILE__, 'extras_contacto_nonce')) {
			update_post_meta( $post_id, 'texto_contacto', $_POST['texto_contacto'] );
			update_post_meta( $post_id, 'telefono_contacto', $_POST['telefono_contacto'] );
			update_post_meta( $post_id, 'fax_contacto', $_POST['fax_contacto'] );
			update_post_meta( $post_id, 'mail_contacto', $_POST['mail_contacto'] );
			update_post_meta( $post_id, 'direccion_contacto', $_POST['direccion_contacto'] );
		}

		if (isset($_POST['telefono_sucursal']) AND check_admin_referer(__FILE__, 'extras_sucursal_nonce')) {
			update_post_meta( $post_id, 'telefono_sucursal', $_POST['telefono_sucursal'] );
			update_post_meta( $post_id, 'direccion_sucursal', $_POST['direccion_sucursal'] );
		}
		
		// Guardar correctamente los checkboxes
		if ( isset($_POST['noticia-destacada']) and check_admin_referer(__FILE__, '_extras_noticia_nonce') ){
			update_post_meta($post_id, 'noticia-destacada', $_POST['noticia-destacada']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, 'noticia-destacada');
		}


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
