<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	<div class="inside load-item">
		<div class="page-content">

			<?php get_theme_page_title(); ?>

			<div class="cpage clear">

				<!--CONTENT-->
				<div class="contact-desc">

					<!--MAP-->
					<div id="map"></div>

				</div>

				<!--FORM-->
				<div id="respond">
					<?php
						if (have_posts()) :
							while (have_posts()) : the_post();
								the_content();
							endwhile;
						endif;
					?>
				</div>

			</div>

		</div>
	</div>

<?php get_footer(); ?>
