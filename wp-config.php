<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'brandon_tubexa');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'brandon_tubexa');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'o2fmX4PN@7$o%py%%a');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e{y`@_Ze|E{{Jj7nr3 kK|TBTRH|Ld<449j-@=A#|CvX_|/Ey92k,??YQ Bx^_-U');
define('SECURE_AUTH_KEY',  '5Nif HGD6U+2/PlD8]+h,qHXXHs,{O#VV|M[B.f> 7@gF*Bui(x$hn.HQ>(T|MsV');
define('LOGGED_IN_KEY',    'p6g)W/w+|RsX%;?#e;k l3|gVH0`Y&nWw}gDU[G1vNSnpyF1|@5OoRoTv3MpToBn');
define('NONCE_KEY',        'y1kq8$fc^&v< q<xi/vzkI>4OsV1@_yXEs}>ATvc]4V:v<3x`zdX8n.):s7)yO&Q');
define('AUTH_SALT',        'n;Q/$Mo)U06iNpH8F1f;3G2(XwrRrlT+T1Z!r$f{Kk,/|ad=XI2MoQu|?`HW<$m6');
define('SECURE_AUTH_SALT', '{|k-(E}{p`=@c,s!xuIWWL`>V4f8ktRBBgqfDFxx.!OlrC+XUjwx>1CEDQSlL%1|');
define('LOGGED_IN_SALT',   'e7}n36;>ZO_Q4qvu[qSH YF-=%?-jCDFHf+B#sg-V[ekSMu@:Xs.y$H3u!`}-;E)');
define('NONCE_SALT',       'ippv3+/D-yil8+:gA/{a]Ko?/wub/gojK;DR;IVY6<N)T_Br{1_,US#.nO(}*gjc');

/**
* Desactivar editor
*/
define( 'DISALLOW_FILE_EDIT', true ); 

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'px_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Evitar que se encuentre el archivo xmlrpc */
add_filter('xmlrpc_enabled', '__return_false');

