<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="keywords" content="<?php echo get_option('arch_meta_keywords'); ?>" />
<meta name="description" content="<?php echo get_option('arch_meta_descriptions'); ?>" />
<?php
	if(get_option('arch_site_layout') != "true") {
		?><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /><?php
	}
?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<?php
	if(get_option('arch_favicon') == ""){
		?><link rel="shortcut icon" href="http://themecss.com/img/favicon.ico" /><?php
	}else {
		?><link rel="shortcut icon" href="<?php echo get_option('arch_favicon'); ?>" /><?php
	}
?>

<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<?php wp_head(); ?>
</head>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<body class="page page-template page-template-template-about-php customize-support">

	<!--CONTAINER-->
	<div id="container">

		<header class="clear">

			<!--LOGO-->
			<aside class="logo">
				<h1>
					<a href="<?php echo home_url(); ?>">
						<?php
							if(get_option('arch_logo') == "") {
								?><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /><?php
							}else {
								?><img src="<?php echo get_option('arch_logo'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /><?php
							}
						?>
					</a>
				</h1>
			</aside>

			<section class="inside">
				<!--MENU-->
				<nav>
					<?php
						wp_nav_menu( array( 'theme_location' => 'primary-menu', 'fallback_cb' => 'menu_fallback', 'container_class' => 'menu clear', 'container_id' => 'dropdown', 'menu_id' => 'main-menu', 'menu_class' => 'sf-menu' ) );
					?>
				</nav>
				<div class="smenu"><select class="select-menu">&nbsp;</select></div>
			</section>

			<?php
				if(get_option('arch_header_widget')!="true") {
					?>
					<!--HEADER WIDGET-->
					<div class="header-widget">
						<?php get_sidebar( 'header' ); ?>
					</div>
					<?php
				}
			?>

		</header>


		<!--CUSTOM SIDEBAR-->
		<?php
			global $options, $sidebar_choice;

			@$options = get_post_custom(get_the_ID());
			if(isset($options['custom_sidebar'])) {
				$sidebar_choice = $options['custom_sidebar'][0];
			}

			project_link();
		?>

		<?php get_template_part( 'bg-slider' ); ?>

			<div class="page-content">

				<h2 class="ptitle">Montauk House</h2>

				<div class="services">

					Long Island, USA
					2009 – 2013

					<p>The volume of this house on the Atlantic shore is pulled north, away from the
					ocean and towards a small valley running along the west side of the plot. The building form flexes to follow this topographical line, allowing the lower deck to engage naturally with the flow of the dune. The material palette reinforces the intimacy of the relationship between architecture and context, with walls finished in sandy render and decks made from silvered ipe, resembling driftwood. A series of pristine vertical planes rises from the upper deck, framing space and views and providing a powerful counterpoint to the structure’s low horizontal mass.</p>

					Project Architect
					Guy Dickinson, Mark Treharne

					Photography
					Gilbert McCarragher

				</div>

			</div>

<?php get_footer(); ?>
