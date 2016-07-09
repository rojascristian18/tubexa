<?php

/****************************************************************************************************
Custom Taxonomy Categoría cat_proyectos
*/
register_taxonomy('cat_proyectos', array('proyecto'), array(
	'label'					=> __('Categoría Proyectos'),
	'hierarchical'			=> true,
	'public'				=> true,
	'show_ui'				=> true,
	'show_admin_column'		=> true,
	'show_in_nav_menus'		=> true,
	'show_tagcloud'			=> true
));

/****************************************************************************************************
Custom Post Type proyectos
*/
function proyectos_custom_post_type()
{
	register_post_type('proyecto', array(
		'description'			=> 'Proyectos',
		'labels'				=> array(
			'name'					=> 'Proyectos',
			'singular_name'			=> 'Proyectos',
			'menu_name'				=> 'Proyectos',
			'parent_item_colon'		=> 'Proyecto Padre:',
			'all_items'				=> 'Todos las Proyectos',
			'view_item'				=> 'Ver Proyecto',
			'add_new_item'			=> 'Nuevo Proyecto',
			'add_new'				=> 'Nuevo Proyecto',
			'edit_item'				=> 'Editar Proyecto',
			'update_item'			=> 'Editar Proyecto',
			'search_items'			=> 'Buscar Proyectos',
			'not_found'				=> 'No se encontraron Proyectos',
			'not_found_in_trash'	=> 'No se encontraron Proyectos en la Papelera',
		),
		'supports'				=> array('title'),
		'taxonomies'			=> array('cat_proyectos'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-calendar-alt',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'proyecto',///%categoria_producto%',
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
add_action('init', 'proyectos_custom_post_type', 0);
