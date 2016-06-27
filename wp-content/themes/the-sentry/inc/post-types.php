<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// PROMOCIONES
		$labels = array(
			'name'          => 'Promociones',
			'singular_name' => 'Promoción',
			'add_new'       => 'Nueva Promoción',
			'add_new_item'  => 'Nueva Promoción',
			'edit_item'     => 'Editar Promoción',
			'new_item'      => 'Nueva Promoción',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Promoción',
			'search_items'  => 'Buscar Promoción',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Promociones'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'promciones' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'promocion', $args );

		// SUCURSALES
		$labels = array(
			'name'          => 'Plazas',
			'singular_name' => 'Plaza',
			'add_new'       => 'Nueva Plaza',
			'add_new_item'  => 'Nueva Plaza',
			'edit_item'     => 'Editar Plaza',
			'new_item'      => 'Nueva Plaza',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Plaza',
			'search_items'  => 'Buscar Plaza',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Plazas'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'plazas' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title' )
		);
		register_post_type( 'plaza', $args );

		// Concesionarias
		$labels = array(
			'name'          => 'Concesionarias',
			'singular_name' => 'Concesionaria',
			'add_new'       => 'Nueva Concesionaria',
			'add_new_item'  => 'Nueva Concesionaria',
			'edit_item'     => 'Editar Concesionaria',
			'new_item'      => 'Nueva Concesionaria',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Concesionaria',
			'search_items'  => 'Buscar Concesionaria',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Concesionarias'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'concesionarias' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title' )
		);
		register_post_type( 'concesionaria', $args );

		// Tiendas
		$labels = array(
			'name'          => 'Tiendas',
			'singular_name' => 'Tienda',
			'add_new'       => 'Nueva Tienda',
			'add_new_item'  => 'Nueva Tienda',
			'edit_item'     => 'Editar Tienda',
			'new_item'      => 'Nueva Tienda',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Tienda',
			'search_items'  => 'Buscar Tienda',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Tiendas'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'tiendas' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title' )
		);
		register_post_type( 'tienda', $args );

		// ---

		$labels = array(
			'name'          => 'Descargas',
			'singular_name' => 'Descarga',
			'add_new'       => 'Nueva Descarga',
			'add_new_item'  => 'Nueva Descarga',
			'edit_item'     => 'Editar Descarga',
			'new_item'      => 'Nueva Descarga',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Descarga',
			'search_items'  => 'Buscar Descarga',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Descargas'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'descargas' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'thumbnail' )
		);
		register_post_type( 'descarga', $args );

		// ---

		$labels = array(
			'name'          => 'Preguntas',
			'singular_name' => 'Pregunta',
			'add_new'       => 'Nueva Pregunta',
			'add_new_item'  => 'Nueva Pregunta',
			'edit_item'     => 'Editar Pregunta',
			'new_item'      => 'Nueva Pregunta',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Pregunta',
			'search_items'  => 'Buscar Pregunta',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Preguntas'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'preguntas' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor' )
		);
		register_post_type( 'pregunta', $args );

	});





	function change_post_menu_label() {
	    global $menu, $submenu;

	    $menu[5][0] = 'Noticias';
	    $submenu['edit.php'][5][0] = 'Noticias';
	    $submenu['edit.php'][10][0] = 'Nueva Noticia';
	    $submenu['edit.php'][16][0] = 'Noticias Tags';
	    echo '';
	}
	add_action( 'admin_menu', 'change_post_menu_label' );

	function change_post_object_label() {
	    global $wp_post_types;

	    $labels = &$wp_post_types['post']->labels;
	    $labels->name = 'Noticias';
	    $labels->singular_name = 'Noticias';
	    $labels->add_new = 'Nueva Noticia';
	    $labels->add_new_item = 'Nueva Noticia';
	    $labels->edit_item = 'Editar Noticia';
	    $labels->new_item = 'Nuevas Noticias';
	    $labels->view_item = 'Ver Noticias';
	    $labels->search_items = 'Buscar Noticias';
	    $labels->not_found = 'Not found';
	    $labels->not_found_in_trash = 'Not found in trash';
	}
	add_action( 'init', 'change_post_object_label' );