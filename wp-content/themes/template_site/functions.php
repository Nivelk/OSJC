<?php

/*** Theme setup ***/

load_theme_textdomain('templatic');

load_textdomain( 'templatic', TEMPLATEPATH.'/language/pt_BR.mo' );

define('TT_ADMIN_FOLDER_NAME','admin');

define('TT_ADMIN_FOLDER_PATH',TEMPLATEPATH.'/'.TT_ADMIN_FOLDER_NAME.'/'); //admin folder path





if(file_exists(TT_ADMIN_FOLDER_PATH . 'constants.php')){



include_once(TT_ADMIN_FOLDER_PATH.'constants.php');  //ALL CONSTANTS FILE INTEGRATOR



}





if(file_exists(TT_FUNCTIONS_FOLDER_PATH . 'custom_filters.php')){

include_once (TT_FUNCTIONS_FOLDER_PATH . 'custom_filters.php'); // manage theme filters in the file



}





if(file_exists(TT_FUNCTIONS_FOLDER_PATH . 'widgets.php')){

include_once (TT_FUNCTIONS_FOLDER_PATH . 'widgets.php'); // theme widgets in the file



}







// Theme admin functions



include_once (TT_FUNCTIONS_FOLDER_PATH . 'custom_functions.php');







include_once(TT_ADMIN_FOLDER_PATH.'admin_main.php');  //ALL ADMIN FILE INTEGRATOR







if(file_exists(TT_WIDGET_FOLDER_PATH . 'widgets_main.php')){



include_once (TT_WIDGET_FOLDER_PATH . 'widgets_main.php'); // Theme admin WIDGET functions



}





if(file_exists(TT_MODULES_FOLDER_PATH . 'modules_main.php')){



include_once (TT_MODULES_FOLDER_PATH . 'modules_main.php'); // Theme moduels include file



}







include_once(TT_ADMIN_FOLDER_PATH.'auto_update_framework.php');  //FRAMEWORK AUTO UPDATE LINK



if(file_exists(TT_INCLUDES_FOLDER_PATH . 'auto_install/auto_install.php')){



include_once (TT_INCLUDES_FOLDER_PATH . 'auto_install/auto_install.php'); // sample data insert file



}



/* Constantes de caminho para pastas internas

	LEMBRAR DE USAR ECHO ou PRINT antes das constantes

*/

define("SKINS",get_bloginfo('template_url') . "/skins");

define("IMAGES",get_bloginfo('template_url') . "/images");

define("JS",get_bloginfo('template_url') . "/js");

define("THEME",get_bloginfo('template_url'));
// Acerta o line-height dos inputs da area administrativa
add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts()
{
  echo '<style>
    input, select, textarea {
    	line-height: 17px;
		}
	  .media-frame input, .media-frame textarea {
    	line-height: 20px;
    	padding: 6px 8px;
		}
	  </style>';
}

// Pega o path do diretorio do tema para corrigir o caminho das imagens down.gif e right.gif no arquivo js/jqueryslidemenu.js .
function set_js_var() {
	$translation_array = array( 'template_directory_uri' => get_template_directory_uri());
	wp_localize_script( 'jquery', 'my_data', $translation_array );
} 
add_action('wp_enqueue_scripts','set_js_var');  
?>