<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<?php if(is_front_page()): ?>	
	<div class="top-bar" id="top-bar-menu">
<?php else: ?>
	<div class="top-bar not-front" id="top-bar-menu">
<?php endif; ?>		
		<div class="top-bar-left float-left">
			<ul class="menu logo-wrap">	
				<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo2.png"></a></li>
			</ul>
		</div>
		<div class="top-bar-right show-for-medium">	
			<?php joints_top_nav(); ?>	
		</div>
		<div class="top-bar-right float-right show-for-small-only">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
			</ul>
		</div>
	</div>