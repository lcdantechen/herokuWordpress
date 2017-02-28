<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	

	<footer class="footer_wrap bg_tint_dark footer_style_dark widget_area">
				<div class="content_wrap">
					<div class="columns_wrap with_padding">
						<aside class="column-1_4 widget widget_socials">
							<div class="widget_inner">
								<div class="logo">
									<a href="/">
										<img src="<?php bloginfo('template_directory'); ?>/images/CampanaroDonna-logo-BC02.png" alt="">
										
									</a>
								</div>
								<div class="logo_descr">Our professional and caring staff is dedicated to delivering only  premium quality and comprehensive financial services.  This is one of the highest priorities of our company.</div>
								<div class="sc_socials sc_socials_size_small">
									<div class="sc_socials_item">
										<a href="#" target="_blank" class="social_icons social_tumblr icons">
											<span class="icon-tumblr"> </span>
											<span class="sc_socials_hover icon-tumblr"> </span>
										</a>
									</div>
									<div class="sc_socials_item">
										<a href="#" target="_blank" class="social_icons social_facebook icons">
											<span class="icon-facebook"> </span>
											<span class="sc_socials_hover icon-facebook"> </span>
										</a>
									</div>
									<div class="sc_socials_item">
										<a href="#" target="_blank" class="social_icons social_gplus icons">
											<span class="icon-gplus"> </span>
											<span class="sc_socials_hover icon-gplus"> </span>
										</a>
									</div>
									<div class="sc_socials_item">
										<a href="#" target="_blank" class="social_icons social_skype icons">
											<span class="icon-skype"> </span>
											<span class="sc_socials_hover icon-skype"> </span>
										</a>
									</div>
								</div>
							</div>
						</aside>
						<aside class="column-1_4 widget widget_text">
							<h5 class="widget_title">Testimonals</h5>
							<div class="textwidget">
								<div class="testim">I am absolutely pleased and satisfied with this company’s service. It is so great to work with a financial adviser who is truly interested in their client’s needs, goals and preferences. I am really impressed with their commitment. <br>
									<br>
									<em>- Alexander Davis</em>
									<br>
									<br>
									<a href="#">View All Testimonials</a>
								</div>
							</div>
						</aside>
						<aside class="column-1_4 widget widget_text">
							<h5 class="widget_title">Contact Info</h5>
							<div class="textwidget">
								<ul class="sc_list  sc_list_style_iconed">
									<li class="sc_list_item">
										<span class="sc_list_icon icon-home-1"> </span>
										991 US Route 22 West<br>
										 Bridgewater, NJ  08807</li>
									<li class="sc_list_item">
										<span class="sc_list_icon icon-smartphone"> </span>(908) 917-0484
									</li>
									<li class="sc_list_item">
										<span class="sc_list_icon icon-mail-2"> </span>
										<a class="footer_email" href="mailto:info@yoursite.com">numbers0922@gmail.com</a>
									</li>
									<li class="sc_list_item">
										<span class="sc_list_icon icon-location-1"> </span>
										<a class="footer_map" href="https://www.google.com/maps/place/Bridgewater+Plaza/@40.5815031,-74.6194417,18.78z/data=!4m5!3m4!1s0x89c3950fffffffff:0x736fb05cf75899f2!8m2!3d40.5816243!4d-74.6186946">Map & Directions</a>
									</li>
								</ul>
							</div>
						</aside>
						<aside class="column-1_4 widget widget_flickr">
							<h5 class="widget_title">Photo Gallery</h5> 
							<div class="flickr_images">
								<script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=6&amp;display=random&amp;flickr_display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=49707497%40N06"></script>
							</div>
						</aside> 
					</div>  
				</div>  
			</footer>	

			</div>
		</div>	

			<?php
				/* Always have wp_footer() just before the closing </body>
				 * tag of your theme, or you will break many plugins, which
				 * generally use this hook to reference JavaScript files.
				 */

				wp_footer();
			?>

</body>
</html>