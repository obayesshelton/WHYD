<?php get_header(); ?>

		<?php
			if ( post_password_required() ) {

			}else {
				if ( have_posts() ) :
					while (have_posts()) : the_post();

		?>
						<div class="inside load-item" style="display: block;">

							<div class="page-content">

								<h2 class="ptitle"><?php the_title(); ?></h2>

								<br class="clear"/>

								<div class="project-info">

									<?php the_content(); ?>

								</div>

								<div class="project-info" style="margin-right: 0px;">

									<button class="grow-projects-images">Grow</button>

									<div class="portfolio-flexslider">
										<ul class="slides">
											<?php
												$pattachment_order = get_option('arch_attachment_order');
												$pattachment_orderby = get_option('arch_attachment_orderby');

												if(get_option('arch_project_thumb_slider')!="true") {
													$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'order' => $pattachment_order, 'orderby' => $pattachment_orderby, 'post_status' => null, 'post_parent' => $post->ID );
												}else {
													$thumb_id = get_post_thumbnail_id( get_the_ID() );
													$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'order' => $pattachment_order, 'orderby' => $pattachment_orderby, 'post_status' => null, 'post_parent' => $post->ID, 'exclude' => $thumb_id );
												}

												$attachments = get_posts( $args );

												if ( $attachments ) {
													foreach ( $attachments as $attachment ) {
														$img_title = $attachment->post_title;
														$attachment_id = $attachment->ID;
														$type = get_post_mime_type( $attachment->ID );
														$large_image_url = wp_get_attachment_image_src( $attachment_id, 'full' );

														switch ( $type ) {
															case 'video/mp4':
																?>
																<li>
																	<video id="videojs_gallery" class="video-js vjs-default-skin" controls preload="none" width="728" height="450" poster="" data-setup="{}">
																		<source src="<?php echo wp_get_attachment_url( $attachment->ID ); ?>" type='video/mp4' />
																	</video>
																</li>
																<?php
															break;
															default:
																?>
																<li><?php echo wp_get_attachment_image( $attachment->ID, 'portfolio-large' ); ?></li>
																<?php
															break;
														}

													}
												}else {
													?><img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-large.jpg" alt="" title="" /><?php
												}
											?>
										</ul>
										<ul class="flex-direction-nav">
											<li><a class="flex-prev" href="#">Previous</a></li>
											<li><a class="flex-next" href="#">Next</a></li>
										</ul>
									</div>

								</div>

								<br class="clear"/>

							</div>

						</div>

		<?php
					endwhile;

				endif;
			}
		?>

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/flexslider/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="<?php echo plugins_url(); ?>/typo-shortcodes/js/toggle/jquery.toggle.js"></script>
		<script type="text/javascript" src="<?php echo plugins_url(); ?>/typo-shortcodes/js/tabs/jquery.tabs.js"></script>
		<script type="text/javascript" src="<?php echo plugins_url(); ?>/typo-shortcodes/js/alert.js"></script>
		<script type='text/javascript' src='<?php echo includes_url(); ?>js/jquery/ui/jquery.ui.core.min.js?ver=1.9.2'></script>
		<script type='text/javascript' src='<?php echo includes_url(); ?>js/jquery/ui/jquery.ui.widget.min.js?ver=1.9.2'></script>
		<script type='text/javascript' src='<?php echo includes_url(); ?>js/jquery/ui/jquery.ui.mouse.min.js?ver=1.9.2'></script>
		<script type='text/javascript' src='<?php echo includes_url(); ?>js/jquery/ui/jquery.ui.draggable.min.js?ver=1.9.2'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.easing-1.3.min.js?ver=3.6'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/scrollpane/jquery.mousewheel.min.js?ver=3.6'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/touchTouch/touchTouch.jquery.js?ver=3.6'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/video/video.js?ver=3.6'></script>

<?php get_footer(); ?>
