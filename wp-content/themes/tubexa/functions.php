<?
/**
* Add Custom Post type
*/
require_once(get_template_directory() . '/inc/cpt-archivos-descargables.php');
require_once(get_template_directory() . '/inc/cpt-proyectos.php');
require_once(get_template_directory() . '/inc/cpt-clientes.php');
require_once(get_template_directory() . '/inc/cpt-sucursales.php');
require_once(get_template_directory() . '/inc/cpt-encargados.php');

/**
* Aplazar JavaScript
*/ 
if (! is_admin() ) {
	add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
    function defer_parsing_of_js ( $url ) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        // return "$url' defer ";
        return "$url' defer onload='";
    }
    
   	wp_deregister_script('jquery');
	wp_register_script('jquery', get_site_url().'/wp-includes/js/jquery/jquery.js', false, '1', true);
	wp_enqueue_script('jquery'); 
    
}

/**
* Adds Css
*/
function register_css() {
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/public/css/theme-style.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/public/css/bootstrap.css');
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/public/css/fonts.css');
}

add_action('wp_footer', 'register_css');


/**
* Adds js
*/
function register_js() {
	//wp_enqueue_script('jquery_init', get_template_directory_uri() . '/public/js/jquery.js', array(), '1', true);
	wp_enqueue_script('bootstrap_init', get_template_directory_uri() . '/public/js/bootstrap.js', array(), '1', true);
	wp_enqueue_script('theme_init', get_template_directory_uri() . '/public/js/theme.js', array(), '1', true);
}

add_action('wp_enqueue_scripts', 'register_js');


/**
* Hides admin bar
*/
show_admin_bar(false);


/**
* Adds menus
*/
function register_menus() {

	register_nav_menus(
		array(
			'header-nav'				=> __('Menú Header')
			)
	);

}

add_action('init', 'register_menus');

add_action( 'wp_print_styles', 'deregister_cf7_styles', 100 );

function deregister_cf7_styles() {
    wp_deregister_style( 'contact-form-7' ); 
}

/**
 * Elimina menues del admin
 */
function remove_menus()
{
	//remove_menu_page('index.php');					//Dashboard
	//remove_menu_page('edit.php');						//Posts
	//remove_menu_page('upload.php');					//Media
	remove_menu_page('edit-comments.php');			//Comments
	remove_menu_page('themes.php');					//Appearance
	remove_menu_page('plugins.php');					//Plugins
	//remove_menu_page('users.php');					//Users
	//remove_menu_page('tools.php');					//Tools
	//remove_menu_page('options-general.php');			//Settings
	remove_menu_page('edit.php?post_type=acf');		//Custom Fields
	remove_menu_page('wpcf7');						//Contact Form 7
}
add_action('admin_menu', 'remove_menus', 999);


/**
* Remove screen options
*/
function remove_screen_options(){
    return false;
}

add_filter('screen_options_show_screen', 'remove_screen_options');


/**
* Remove admin bar options
*/
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
	$wp_admin_bar->remove_node( 'comments' );
	$wp_admin_bar->remove_node( 'updates' );
	//$wp_admin_bar->remove_node( 'new-content' );
}

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

/**
 * Image size
 */
if ( function_exists('add_theme_support') )
{
	add_theme_support('post-thumbnails');
	add_image_size('logo', 145, 45, true);
	add_image_size('box', 225, 150, true);
	add_image_size('banner', 1350, 575, true);
	add_image_size('banner-internas', 1050, 150, true);
	add_image_size('aplicaciones', 490, 320, true);
	add_image_size('revestimientos', 310, 130, true);
	add_image_size('especificaciones', 310, 310, true);
}

/**
* Retorna un valor de la página "configuración del sitio" según el nombre del ACF;
*/
function get_site_config ($value = null) {

	$config = new WP_Query( array('page_id' => 14) );
	$data = array();

	if ( $config->have_posts() && $value != null ) {
		while ( $config->have_posts() ) {
			$config->the_post();
			$data[$value] = ( ! empty(get_field($value)) ) ? get_field($value) : 'No existe campo' ;
		}
	}

	return $data[$value];
	wp_reset_postdata();
}


/**
 * Register our sidebars and widgetized areas.
 *
 */
function banner_widgets_init() {

	register_sidebar( array(
		'name'          => 'Texto del Banner',
		'id'            => 'banner_text',
		'before_widget' => '<div class="caption">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="hide">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'banner_widgets_init' );


/**
 * Captura Leads
 */
function tubexa_captura_leads($data = null)
{
	$Formulario_identificador = 'FORM-TUBEXA-NUEVO';

	if ( ! empty($_POST['_wpcf7']) && ( $_POST['_wpcf7'] == 196 || $_POST['_wpcf7'] == 306 ) )
	{
		$endpoint               = curl_init();
		curl_setopt_array($endpoint, array(
			//CURLOPT_URL					=> 'http://landings.brandon.cl/api/1.0/leads.json',
			CURLOPT_URL				=> 'http://dev.brandon.cl/brandon/landings/api/1.0/leads.json',
			CURLOPT_POST				=> true,
			CURLOPT_POSTFIELDS			=> urldecode(http_build_query(array(
				'_method'				=> 'POST',
				'Cliente'				=> array(
					'identificador'			=> 'TUBEXA',
					'clave'					=> 'n^xyJBRa6k2BdF9RzM'
				),
				'Formulario'			=> array(
					'identificador'			=> $Formulario_identificador
				),
				'Campo'					=> array(
					'tipo'					=> $_POST['tipo'],
					'nombre'				=> $_POST['nombre'],
					'apellido'				=> $_POST['apellido'],
					'empresa'				=> $_POST['empresa'],
					'telefono'				=> $_POST['telefono'],
					'email'					=> $_POST['email'],
					'asunto'				=> $_POST['asunto'],
					'mensaje'				=> $_POST['mensaje'],
					'origen'				=> $_POST['origen']
				)
			))),
			CURLOPT_RETURNTRANSFER		=> true,
			CURLOPT_VERBOSE				=> true,
			CURLINFO_HEADER_OUT			=> true,
			CURLOPT_TIMEOUT				=> 2000
		));
		$resultado			= curl_exec($endpoint);
		$err				= curl_errno($endpoint);
		curl_close($endpoint);
		$resultado			= json_decode($resultado, true);
	}
}

add_action('wpcf7_before_send_mail', 'tubexa_captura_leads');

/** 
* Para evitar ataques ddos realizar los siguientes pasos:
*	Agregar filtro que se muestra a continuación;	
* 	Además agregar add_filter('xmlrpc_enabled', '__return_false'); en el wp-config de wordpress;
* 	Renombrar o eliminar archivo xmlrpc.php;
*/
add_filter( 'xmlrpc_methods', function( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} );

?>