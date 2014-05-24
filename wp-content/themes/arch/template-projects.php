<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

	<div class="inside load-item">
		<div class="page-content project-inside">
			<?php get_theme_page_title(); ?>
			<?php get_projects_category(); ?>
		</div>
	</div>

	<!--PROJECTS-->
	<div class="project-page <?php if(strpos($theUA,'msie')) { } else { echo "load-item"; } ?> clear">
		<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					the_content();
				endwhile;
			endif;
		?>

		<!--PROJECT LIST-->
		<div class="chunk">
              <h2>Montauk House</h2>
              <div class="meta-data">
                <p>Long Island, USA<br>2009 – 2013</p>
			</div>
        </div>

	</div>

<?php get_footer(); ?>
