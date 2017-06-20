<?php get_header(); ?>
	<!-- BOF Slider -->		
	<?php templ_home_page_slider(); //home header slider ?>
	<?php
	$slider_bg_choose = get_option('ptthemes_bg_choose');
	$slider_bg_color = get_option('ptthemes_bg_color');
	$slider_bg_url = get_option('ptthemes_bg_url');
	$slider_bg_position = get_option('ptthemes_bg_position');
	$slider_bg_repeat = get_option('ptthemes_bg_repeat');
	
	// Definindo cor de fundo
	?>
	<script>
	<?php
	if ($slider_bg_color == '') {
	?>
		var bg_color = $('#coda-slider-1').css('background-color');
	<?php
	}
	else {
	?>
		var bg_color = '<?php echo $slider_bg_color; ?>';
	<?php
	}
	?>
	</script>
	<?php
	
	// Preferencia url por upload
	if (!$slider_bg_url) {
		if ($slider_bg_choose == "Manter imagem de fundo padrão do tema") {
			echo "<script> var bg_url = $('#coda-slider-1').css('background-image'); </script>";
			$slider_bg_info = "\" \" + bg_url + \"";
		}
		elseif($slider_bg_choose == "Remover imagem de fundo padrão do tema") {
			$slider_bg_info = "\" ";
		}
		else {
			$slider_bg_choose = str_replace('sliderbgthumb:', IMAGES . '/sliderbg/',$slider_bg_choose);
			$slider_bg_info = "\" url('" . $slider_bg_choose . "') top left no-repeat";
		}
	}
	else {
		
		// Repeat
		if ($slider_bg_repeat == 'Horizontalmente') { 
			$repeat = 'repeat-x'; 
		}
		elseif ($slider_bg_repeat == 'Verticalmente') { 
			$repeat = 'repeat-y'; 
		}
		elseif ($slider_bg_repeat == 'Todas as direções') { 
			$repeat = 'repeat'; 
		}
		else { 
			$repeat = 'no-repeat';
		}
		
		// Position
		if ($slider_bg_position == 'Canto superior esquerdo') { 
			$position = 'top left'; 
		}
		elseif ($slider_bg_position == 'Centralizado no topo') { 
			$position = 'top center'; 
		}
		elseif ($slider_bg_position == 'Canto superior direito') { 
			$position = 'top right'; 
		}
		elseif ($slider_bg_position == 'Centralizado à esquerda') { 
			$position = 'center left'; 
		}
		elseif ($slider_bg_position == 'Centralizado absoluto') { 
			$position = 'center center'; 
		}
		elseif ($slider_bg_position == 'Centralizado à direita') { 
			$position = 'center right'; 
		}
		elseif ($slider_bg_position == 'Canto inferior esquerdo') { 
			$position = 'bottom left'; 
		}
		elseif ($slider_bg_position == 'Centralizado em baixo') { 
			$position = 'bottom center'; 
		}
		elseif ($slider_bg_position == 'Canto inferior direito') { 
			$position = 'bottom right'; 
		}
		else { 
			$position = 'center center';
		}
		
		$slider_bg_info .= "\" url('" . $slider_bg_url . "') " . $position . " " . $repeat;
	}
	$slider_bg_info .= "\"";
	
	?>
	<script>
	//alert(bg_color + <?php echo $slider_bg_info; ?>);
	$('#coda-slider-1').css("background", bg_color + <?php echo $slider_bg_info; ?>);
	</script>

	
	<!-- Content  2 column - left Sidebar  -->
    <div class="content right">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Index Content Above')){?><?php } else {?>  <?php }?>
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Front Page Content')){?><?php } else {?>  <?php }?>
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Index Content Below')){?><?php } else {?>  <?php }?>
	</div> <!-- /Content -->
	<div class="sidebar left" >
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Index Page Sidebar Left')){?> <?php } else {?>  <?php }?>
	</div>  <!-- sidebar #end --> 
<?php get_footer(); ?>