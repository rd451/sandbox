<?php
/**
 * 
 * Template Name: page-home
 * 
 * This file was created because I needed to put in code
 * that displays the most recent blog post, and I 
 * couldn't make the code work by simply putting it
 * into the edit page section in the Word Press admin
 * side.
 *
 *
 */

get_header(); ?>

<!--
<div class="action-packed">
	<img src="http://localhost/wordpress/wp-content/uploads/2017/04/action-packed-1100-142.png"/>	
	</div>
-->
	
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			
		?>
		
		<?php if (is_active_sidebar('Intro-Image')) : ?>
				
			<?php dynamic_sidebar('intro-image'); ?>

		<?php endif; ?>
		
		<?php if (is_active_sidebar('Latest-Post')) : ?>
				
			<?php dynamic_sidebar('latest-post'); ?>

		<?php endif; ?>
		
		<?php if (is_active_sidebar('Custom-Section')) : ?>
				
			<?php dynamic_sidebar('custom-section'); ?>

		<?php endif; ?>

		</main><!-- #main -->
		
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>
