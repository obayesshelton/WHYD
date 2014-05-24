<?php
	if(get_post_meta( $post->ID, "exclude", true )) {
	}else {
		?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="link-hover">
				<a href="<?php the_permalink(); ?>" class="<?php if(get_option('arch_project_hover_link')=="Lightbox") { echo "frame"; } ?>">
					<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('portfolio-medium', array('title' => ''.get_the_title().''));
						}else {
							?><img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="" title="" /><?php
						}
					?>

				</a>
			</div>
			<div class="project-details">
            	<h3><a href="<?php the_permalink(); ?>" class="<?php if(get_option('arch_project_hover_link')=="Lightbox") { echo "frame"; } ?>"><?php the_title(); ?></a></h3>
            	<div class="meta-data">
                	<?php echo get_the_term_list( $post->ID, 'project_categories', ' ', ', ', '' ); ?>
				</div>
			</div>
		</div>
		<?php
	}
?>
