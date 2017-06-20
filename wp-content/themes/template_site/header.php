<!DOCTYPE html >

<html>

<head>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" >

    <title><?php wp_title (   '  asasdas  | asd asdas', true,'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php

    wp_enqueue_script('jquery');

    wp_enqueue_script('cycle', get_template_directory_uri() . '/js/jquery.cycle.all.min.js', 'jquery', false);

    wp_enqueue_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js', 'jquery', false);

    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', false);

    wp_head();?>

	<?php

		// Aplicando cores customizadas do painel

		$theme_custom_color = get_option('ptthemes_custom_theme_color');

		$theme_custom_inside_text_color = get_option('ptthemes_custom_inside_text_color');



		if ($theme_custom_color != '') :

			$color_query = 'color=' . str_replace('#','',$theme_custom_color);

			if ($theme_custom_inside_text_color != '') {

				$color_query .= '&text_color=' . str_replace('#','',$theme_custom_inside_text_color);

			}

	?>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/custom_color.php?<?php echo $color_query; ?>" />

	<?php

		endif;

	?>

</head>

<body <?php body_class(); ?>>

<?php  include_once(TT_TPL_ROOT_PATH.'header_tpl.php'); //header content area ?> 



<?php if (get_option( 'pttheme_cufon_options') =='Ativar') {  ?>

 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fonts/jquery.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fonts/cufon-yui.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fonts/Humanst521_BT_400.font.js"></script>

    <?php }

?>



<?php

if ( is_home() ) {

}

else{ ?>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>

<?php }

?>