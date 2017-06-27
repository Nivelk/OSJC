<!-- Footer Section -->
<?php 
$appointment_options=theme_setup_data();
$footer_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
<div class="footer-section">
	<div class="container">	
		<div class="row footer-widget-section">
			<?php  dynamic_sidebar( 'footer-widget-area' );	} ?>
            <div class="col-md-3">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-page" data-href="https://www.facebook.com/obrassociaisdojardimclimax/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/obrassociaisdojardimclimax/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/obrassociaisdojardimclimax/">Obras Sociais do Jardim Clímax</a></blockquote></div>
            </div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- /Footer Section -->
<div class="clearfix"></div>
<!-- Footer Copyright Section -->
<div class="footer-copyright-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="footer-copyright">
					<?php if( $footer_setting['footer_menu_bar_enabled'] == 0) { ?>
					<?php echo $footer_setting[ 'footer_copyright_text']; ?>
					</a>
					<?php } // end if ?>
				</div>
			</div>
				<?php if($footer_setting['footer_social_media_enabled'] == 0 ) { 
			    $footer_facebook = $footer_setting['footer_social_media_facebook_link'];
				$footer_twitter = $footer_setting['footer_social_media_twitter_link'];
				$footer_linkdin = $footer_setting['footer_social_media_linkedin_link'];
				$footer_googleplus = $footer_setting['footer_social_media_googleplus_link'];
				$footer_skype = $footer_setting['footer_social_media_skype_link'];
				?>
			<div class="col-md-4">
			<ul class="footer-contact-social">
					<?php if($footer_setting['footer_social_media_facebook_link']!='') { ?>
					<li class="facebook"><a href="<?php echo esc_url($footer_facebook); ?>" <?php if($footer_setting['footer_facebook_media_enabled']==1){ echo "target='_blank'"; } ?> ><i class="fa fa-facebook"></i></a></li>
					<?php } if($footer_setting['footer_social_media_twitter_link']!='') { ?>
					<li class="twitter"><a href="<?php echo esc_url($footer_twitter); ?>" <?php if($footer_setting['footer_twitter_media_enabled']==1){ echo "target='_blank'"; } ?> ><i class="fa fa-twitter"></i></a></li>
					<?php } if($footer_setting['footer_social_media_linkedin_link']!='') { ?>
					<li class="linkedin"><a href="<?php echo esc_url($footer_linkdin); ?>" <?php if($footer_setting['footer_linkedin_media_enabled']==1){ echo "target='_blank'"; } ?> ><i class="fa fa-linkedin"></i></a></li>
					<?php } if($footer_setting['footer_social_media_googleplus_link']!='') { ?>
					<li class="googleplus"><a href="<?php echo esc_url($footer_googleplus); ?>" <?php if($footer_setting['footer_googleplus_media_enabled']==1){ echo "target='_blank'"; } ?> ><i class="fa fa-google-plus"></i></a></li>
					<?php } if($footer_setting['footer_social_media_skype_link']!='') { ?>
					<li class="skype"><a href="<?php echo esc_url($footer_skype); ?>" <?php if($footer_setting['footer_skype_media_enabled']==1){ echo "target='_blank'"; } ?> ><i class="fa fa-skype"></i></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- /Footer Copyright Section -->
<!--Scroll To Top--> 
<a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top--> 
<?php wp_footer(); ?>
</body>
</html>