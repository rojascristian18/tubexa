<?php

/****************************************************************************************************
Custom Taxonomy Categoría archivos_descargables
*/
register_taxonomy('archivos_descargables', array('archivosdescargables'), array(
	'label'					=> __('Categoría Archivos Descargables'),
	'hierarchical'			=> true,
	'public'				=> true,
	'show_ui'				=> true,
	'show_admin_column'		=> true,
	'show_in_nav_menus'		=> true,
	'show_tagcloud'			=> true
));

/****************************************************************************************************
Custom Post Type archivos_descargables
*/
function archivos_descargables_custom_post_type()
{
	register_post_type('archivosdescargables', array(
		'description'			=> 'Archivos descargables',
		'labels'				=> array(
			'name'					=> 'Archivos descargables',
			'singular_name'			=> 'Archivo descargable',
			'menu_name'				=> 'Archivos descargables',
			'parent_item_colon'		=> 'Archivo descargable Padre:',
			'all_items'				=> 'Todos las Archivos descargables',
			'view_item'				=> 'Ver Archivo descargable',
			'add_new_item'			=> 'Nuevo Archivo descargable',
			'add_new'				=> 'Nuevo Archivo descargable',
			'edit_item'				=> 'Editar Archivo descargable',
			'update_item'			=> 'Editar Archivo descargable',
			'search_items'			=> 'Buscar Archivo descargable',
			'not_found'				=> 'No se encontraron Archivos descargables',
			'not_found_in_trash'	=> 'No se encontraron Archivos descargables en la Papelera',
		),
		'supports'				=> array('title', 'editor', 'thumbnail'),
		'taxonomies'			=> array('archivos_descargables'),
		'hierarchical'			=> false,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_icon'				=> 'dashicons-download',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'rewrite'				=> array(
			'slug'					=> 'archivosdescargables',///%categoria_producto%',
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
add_action('init', 'archivos_descargables_custom_post_type', 0);
