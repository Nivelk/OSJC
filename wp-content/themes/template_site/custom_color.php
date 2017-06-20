<?php

	header('Content-type: text/css');

	if (isset($_GET['color']) ) :

		$custom_color = '#' . $_GET['color'];

		if (isset($_GET['text_color'])) {

			$custom_text_color = '#' . $_GET['text_color'];

		}

		else {

			$custom_text_color = '#FFFFFF';

		}

?>

h1, h2, h3, h4, h5, h6 { color: <?php echo $custom_color; ?>; }

.top_navigation_in ul li.current_page_item a, .top_navigation_in ul li.current_page_parent a, .top_navigation_in ul li.current_page_ancestor a, .top_navigation_in li:hover a:hover, .top_navigation_in li a, .top_navigation_in ul ul li a { color: <?php echo $custom_color; ?>; }

.top_navigation_in ul ul li a { color: <?php echo $custom_color; ?> !important; }

.coda-slider a.more { background: <?php echo $custom_color; ?>; color: <?php echo $custom_text_color; ?>; }

.coda-nav ul li a.current { background: <?php echo $custom_color; ?>; }

.sidebar .tabbernav li.tabberactive { background: <?php echo $custom_color; ?>; }

.sidebar .tabbernav li.tabberactive a { color: <?php echo $custom_text_color; ?>; }

.tabbernav { border-color: <?php echo $custom_color; ?>; }

.newsletter .btn_submit, .newsletter .btn_submit:hover { background: <?php echo $custom_color; ?> !important; color: <?php echo $custom_text_color; ?>; }

<?php

	endif;

?>