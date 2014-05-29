<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

	<div class="inside load-item">

		<div class="page-content">

			<h2 class="ptitle"><?php get_theme_page_title(); ?></h2>

			<div class="team-list clear">

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

<?php get_footer(); ?>
