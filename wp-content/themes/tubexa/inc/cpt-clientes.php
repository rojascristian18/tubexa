<?php

/****************************************************************************************************
Custom Taxonomy Categoría cat_clientes
*/
register_taxonomy('cat_clientes', array('cliente'), array(
	'label'					=> __('Categoría clientes'),
	'hierarchical'			=> true,
	'public'				=> true,
	'show_ui'				=> true,
	'show_admin_column'		=> true,
	'show_in_nav_menus'		=> true,
	'show_tagcloud'			=> true
));

/****************************************************************************************************
Custom Post Type clientes
*/
function clientes_custom_post_type()
{
	register_post_type('cliente', array(
		'description'			=> 'Clientes',
		'labels'				=> array(
			'name'					=> 'Clientes',
			'singular_name'			=> 'Cliente',
			'menu_name'				=> 'Nuestros Clientes',
			'parent_item_colon'		=> 'Cliente Padre:',
			'all_items'				=> 'Todos las Clientes',
			'view_item'				=> 'Ver Cliente',
			'add_new_item'			=> 'Nuevo Cliente',
			'add_new'				=> 'Nuevo Cliente',
			'edit_item'				=> 'Editar Cliente',
			'update_item'			=> 'Editar Cliente',
			'search_items'			=> 'Buscar Clientes',
			'not_found'				=> 'No se encontraron Clientes',
			'not_found_in_trash'	=> 'No se encontraron Clientes en la Papelera',
		),
		'supports'				=> array('title'),
		'taxonomies'			=> array('cat_clientes'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-universal-access-alt',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'cliente',///%categoria_producto%',
			'hierarchical'			=> false,
			'with_front'			=> true,
			'pages'					=> true,
			'feeds'					=> false,
			//'ep_mask'				=> EP_PERMALINK
		),
		'query_var'				=> true,
		'_builtin'				=> false,
		'capability_type'		=> 'post'
	));
	flush_rewrite_rules();
}
add_action('init', 'clientes_custom_post_type', 0);
