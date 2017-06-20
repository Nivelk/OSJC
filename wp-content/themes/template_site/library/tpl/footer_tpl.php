</div>
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Container Below')){?><?php } else {?>  <?php }?>
<?php include(TT_TPL_ROOT_PATH."bottom.php");?> <!-- bottom #end -->
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Above')){?>
<?php } else {?>  <?php }?>    
		<div id="footer">
        	<div class="footer_inner"> 
                <p class="fl">Copyright &copy; 2014 <a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>. Todos os direitos reservados.</p>
                <p class="fr"> 
                    <span class="copyright"><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></span>
                </p>
           </div>       
     	</div>
    </div>

<!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->
<?php wp_footer(); ?>

<?php echo (get_option('ga')) ? get_option('ga') : '' ?>
