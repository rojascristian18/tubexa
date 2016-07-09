<?php

/****************************************************************************************************
Custom Taxonomy Categoría cat_sucursales
*/
register_taxonomy('cat_sucursales', array('sucursal'), array(
	'label'					=> __('Categoría sucursales'),
	'hierarchical'			=> true,
	'public'				=> true,
	'show_ui'				=> true,
	'show_admin_column'		=> true,
	'show_in_nav_menus'		=> true,
	'show_tagcloud'			=> true
));

/****************************************************************************************************
Custom Post Type sucursales
*/
function sucursales_custom_post_type()
{
	register_post_type('sucursal', array(
		'description'			=> 'Sucursales',
		'labels'				=> array(
			'name'					=> 'Sucursales',
			'singular_name'			=> 'Sucursal',
			'menu_name'				=> 'Sucursales',
			'parent_item_colon'		=> 'Sucursal Padre:',
			'all_items'				=> 'Todas las Sucursales',
			'view_item'				=> 'Ver Sucursal',
			'add_new_item'			=> 'Nueva Sucursal',
			'add_new'				=> 'Nueva Sucursal',
			'edit_item'				=> 'Editar Sucursal',
			'update_item'			=> 'Editar Sucursal',
			'search_items'			=> 'Buscar Sucursales',
			'not_found'				=> 'No se encontraron Sucursales',
			'not_found_in_trash'	=> 'No se encontraron Sucursales en la Papelera',
		),
		'supports'				=> array('title'),
		'taxonomies'			=> array('cat_sucursales'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-location-alt',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'sucursal',///%categoria_producto%',
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
add_action('init', 'sucursales_custom_post_type', 0);
