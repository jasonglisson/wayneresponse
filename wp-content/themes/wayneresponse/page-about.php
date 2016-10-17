<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
	
	<div id="content-wrap">
	
		<div id="inner-content" class="row">
	
		  <main id="main" class="large-12 medium-12 columns" role="main">					
			
				<h2><?php print get_the_title(); ?></h2>
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
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>