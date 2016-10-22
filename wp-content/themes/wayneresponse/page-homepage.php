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
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=270997929592089";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
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
					<h1 class="headline"><?php print the_field('headline'); ?></h1>
					<div class="headline-text"><?php print the_field('headline_text'); ?></div>
					<hr />
					<h1 class="help-headline">We need your help!</h1>
					<div class="buttons">
						<?php if( have_rows('buttons') ): ?>
							<?php while( have_rows('buttons') ): the_row(); 
								$text = get_sub_field('button_text');
								$link = get_sub_field('button_link');
							?>
								<?php if($text): ?>
									<a href="<?php print $link; ?>"><button class="hollow learn-more button"><?php print $text; ?></button></a>									
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>						
					</div>
				</div>	
			</div>  
			<div class="thanks" title="Thank you!">!</div>
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
	<div id="lower-content">
		<div class="row">
				<?php if( have_rows('bottom_image_links') ): ?>
					<?php while( have_rows('bottom_image_links') ): the_row(); 
						$bottom_title = get_sub_field('title_text');
						$bottom_link = get_sub_field('link');
						$bottom_image = get_sub_field('image');	
						$bottom_text = get_sub_field('sub_text');													
					?>
						<div class="large-4 columns">
						<?php if($bottom_title): ?>
							<h3><a href="<?php print $bottom_link; ?>"><?php print $bottom_title; ?></a></h3>								
						<?php endif; ?>
						<?php if($bottom_image): ?>
							<a href="<?php print $bottom_link; ?>"><img src="<?php print $bottom_image; ?>"></a>						
						<?php endif; ?>
						<?php if($bottom_text): ?>						
							<span><?php print $bottom_text; ?></span>
						<?php endif; ?>
						</div>				  
					<?php endwhile; ?>
				<?php endif; ?>				
		</div>			
	</div>	
	<div class="thanks-wrap"></div>
	<div class="thank-you-text">
		<?php print the_field('thank_you_text'); ?>
	</div>	
<?php get_footer(); ?>
