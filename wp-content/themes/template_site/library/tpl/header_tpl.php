<?php  templ_get_top_header_navigation_above() ?> 

<?php  //templ_get_top_header_navigation() ?> 

<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('header_above')){?>

<?php } else {?>  <?php }?>



<div class="wrapper">

	<div class="header clear">

    	<div class="header_in">

        	<div class="logo">

            	<?php

					templ_site_logo();

					?>

            </div>

			<div class="header_right">

				<?php  templ_get_top_header_navigation(); ?>

			</div>

		</div> <!-- header #end -->

	</div>

   

    <!-- Container -->

    <div id="container" class="clear">

		