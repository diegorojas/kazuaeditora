<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content fundo-blog">

		<div class="space-blog-title"></div><!-- .space-blog-title -->
		<?php get_template_part('content','blog-post-destacado'); ?>
		<h1 id="blog-name">As Últimas Novas da Kasa...</h1><!-- #blog-name -->

		<?php if ( have_posts() ) : ?>
		    	<?php /* Start the Loop */ ?>
		    	<div id="archive-blog-grid">
		    	<?php while ( have_posts() ) : the_post(); ?>
		    	   <?php get_template_part( 'content', 'blog' ); ?>
			    <?php endwhile; ?>	
			<?php endif; ?>
			</div><!-- #archive-blog-grid -->

		<div id="blog-home" class="widget-area" role="complementary">		
			<?php get_sidebar('blog-home'); ?>
	   	</div><!-- .widget-area -->	
	</div><!-- #primary -->
<?php get_footer(); ?>
