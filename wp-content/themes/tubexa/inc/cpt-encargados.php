<?php

/****************************************************************************************************
Custom Taxonomy Categoría cat_encargados
*/
register_taxonomy('cat_encargados', array('encargado'), array(
	'label'					=> __('Categoría encargados'),
	'hierarchical'			=> true,
	'public'				=> true,
	'show_ui'				=> true,
	'show_admin_column'		=> true,
	'show_in_nav_menus'		=> true,
	'show_tagcloud'			=> true
));

/****************************************************************************************************
Custom Post Type encargados
*/
function encargados_custom_post_type()
{
	register_post_type('encargado', array(
		'description'			=> 'Encargados',
		'labels'				=> array(
			'name'					=> 'Encargados',
			'singular_name'			=> 'Encargado',
			'menu_name'				=> 'Encargados',
			'parent_item_colon'		=> 'Encargado Padre:',
			'all_items'				=> 'Todas las Encargados',
			'view_item'				=> 'Ver Encargado',
			'add_new_item'			=> 'Nuevo Encargado',
			'add_new'				=> 'Nuevo Encargado',
			'edit_item'				=> 'Editar Encargado',
			'update_item'			=> 'Editar Encargado',
			'search_items'			=> 'Buscar Encargados',
			'not_found'				=> 'No se encontraron Encargados',
			'not_found_in_trash'	=> 'No se encontraron Encargados en la Papelera',
		),
		'supports'				=> array('title'),
		'taxonomies'			=> array('cat_encargados'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-businessman',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'encargado',///%categoria_producto%',
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
add_action('init', 'encargados_custom_post_type', 0);
