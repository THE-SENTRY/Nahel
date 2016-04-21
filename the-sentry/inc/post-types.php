<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// NOTICIAS
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