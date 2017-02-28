
<?php 

/**
 * Template Name: contact
 *
 */
 get_header(); ?>

<div class="page_content_wrap">

				<section class="">
					<div class="container">
						<div class="row">
							<div class="content_wrap" data-animation="animated fadeInUp normal">
								<div class="columns_wrap sc_columns aligncenter">
									<div class="column-1_3 sc_column_item">
										<span class="sc_icon style_2 icon-email2 sc_icon_shape_none sc_icon_bg_custom link_color"></span>
										<div class="margin_top_mini">
											<p>
												<a href="mailto:info@yoursite.com">info@yoursite.com</a>
												<br/>
												<a href="http://www.yoursite.com">www.yoursite.com</a>
											</p>
										</div>
									</div><div class="column-1_3 sc_column_item">
										<span class="sc_icon style_2 icon-telephone sc_icon_shape_none sc_icon_bg_custom link_color"> </span>
										<div class="margin_top_mini">
											<p>+1(800)123-4567<br/>
											+1(800)123-4566</p>
										</div>
									</div><div class="column-1_3 sc_column_item">
										<span class="sc_icon style_2 icon-location-1 sc_icon_shape_none sc_icon_bg_custom link_color"> </span>
										<div class="margin_top_mini">
											<p>176 W street name, New York,<br/>
											NY 10014</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="grey_section">
					<!--<div class="container">-->
					<!--	<div class="row">-->
					<!--		<div class="sc_contact_form sc_contact_form_standard">-->
					<!--			<h2 class="sc_contact_form_title">Contact Us Today</h2>-->
					<!--			<div class="sc_contact_form contact_form_1">-->
					<!--			  <label> Your Name (required)-->
					<!--				    [text* your-name] </label>-->
									
					<!--				<label> Your Email (required)-->
					<!--				    [email* your-email] </label>-->
									
					<!--				<label> Subject-->
					<!--				    [text your-subject] </label>-->
									
					<!--				<label> Your Message-->
					<!--				    [textarea your-message] </label>-->
									
					<!--				[submit "Send"]-->
					<!--			</div> -->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					
				
				</section>
			</div>

<?php echo do_shortcode( '[contact-form-7 id="29" title="Contact form 1"]' ); ?> 				


<?php get_footer(); ?>