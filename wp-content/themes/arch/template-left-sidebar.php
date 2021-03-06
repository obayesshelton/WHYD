<?php
/*
Template Name: Left Sidebar	
*/	
?>

<?php get_header(); ?>

	<div class="inside load-item">
		<div class="page-content">

			<?php get_theme_page_title(); ?>
			
			<div class="content-inside clear">

				<!--LEFT CONTENT-->
				<div class="right left-content">

					<?php 
						if (have_posts()) : 
							while (have_posts()) : the_post(); 
								the_content(); 								
							endwhile; 
						endif;
					?>

				</div>

				<!--SIDEBAR-->
				<div class="left sidebar">
					<?php
						if($sidebar_choice == "Default") {
							get_sidebar();
						}else {
							get_custom_sidebar(); 
						}
					?>
				</div>	

			</div>

		</div>
	</div>

<?php get_footer(); ?>