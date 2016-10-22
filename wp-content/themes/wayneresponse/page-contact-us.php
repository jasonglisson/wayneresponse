<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>
	
	<div id="content-wrap">
	
		<div id="inner-content" class="row">
			<div class="large-12 columns">
				<h2><?php print get_the_title(); ?></h2>
			</div>
		  <main id="main" class="large-6 columns" role="main">					
		
				<?php
		    while ( have_posts() ) : the_post(); ?> 
		        <div class="entry-content-page">
		            <?php the_content(); ?> <!-- Page Content -->
		        </div><!-- .entry-content-page -->
		
		    <?php
		    endwhile; //resetting the page loop
		    wp_reset_query(); //resetting the page query
		    ?>
			    					
			</main> <!-- end #main -->
		    
		  <div class="large-6 columns">
			  <?php print do_shortcode('[contact-form-7 id="5" title="Contact Us Form"]');?>
			</div>    
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>