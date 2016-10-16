<?php
/*
Template Name: Homepage
*/
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
<body <?php body_class(); ?>>

<div class="off-canvas-wrapper">

<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

<div class="off-canvas-content" data-off-canvas-content>

<header class="header" role="banner">

<!-- This navs will be applied to the topbar, above all content 
  To see additional nav styles, visit the /parts directory -->
<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

</header> <!-- end .header -->
	<div id="content">
	<div class="video-fg"></div>
	<div class="video" data-vide-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/bg.mp4" data-vide-options="loop: true, muted: true, position: 0% 0%"></div>			
		<div id="inner-content">
			<div class="row">
				<div class="large-12 headline-area columns">
					<h1 class="headline">Hurricane Matthew</h1>
					<div class="headline-text">recently devastated Wayne County with flooding.</div>
					<hr />
					<h1 class="help-headline">We need your help!</h1>
					<div class="buttons">
						<button class="hollow donate button" href="#">Donate</button><button class="hollow learn-more button" href="#">Learn More</button>					
					</div>
				</div>	
			</div>  
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
	<div id="lower-content">
		<div class="row">
		  <div class="large-4 columns"><img src="https://organizationdemo.files.wordpress.com/2013/08/page_01.jpg?w=640&h=480&crop=1">
			  <h3>About</h3>
			  <span>This is an example of a page. Unlike posts, which are displayed on your blog’s front page in the order they’re published, pages are better suited for more timeless content that you want to be easily accessible, like your About…</span>
			</div>
		  <div class="large-4 columns"><img src="https://organizationdemo.files.wordpress.com/2013/08/page_01.jpg?w=640&h=480&crop=1">
			  <h3>Mission</h3>
			  <span>This is an example of a page. Unlike posts, which are displayed on your blog’s front page in the order they’re published, pages are better suited for more timeless content that you want to be easily accessible, like your About…</span>		
			</div>
		  <div class="large-4 columns"><img src="https://organizationdemo.files.wordpress.com/2013/08/page_01.jpg?w=640&h=480&crop=1">
			  <h3>Contact Us</h3>
			  <span>This is an example of a page. Unlike posts, which are displayed on your blog’s front page in the order they’re published, pages are better suited for more timeless content that you want to be easily accessible, like your About…</span>		
			</div>
		</div>			
	</div>	

<?php get_footer(); ?>
