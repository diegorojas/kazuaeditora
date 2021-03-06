<?php
/**
 * The template for displaying Archive Autor pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" class="archive-autor" role="main">

			<h1 class="entry-title">
			<p>AUTORES</p>
			</h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>

		<?php query_posts(array(
	'posts_per_page'   => -1,
	'orderby'          => 'name',
	'order'            => 'DESC',
	'post_type'        => 'autor',
	'post_status'      => 'publish',));

		if ( have_posts() ) : ?>
						<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">

<div class="author-archive-avatar"><img src="<?php the_field('autorimage'); ?>" alt="" width="auto" /></div>
		
			<h3 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h3>
		</header><!-- .entry-header -->
		<div class="entry-content">

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

		</article><!-- #post -->

			<?php endwhile;?>
		<?php endif; ?>
		</div><!-- #content -->
	</section><!-- #primary -->

	<div id="secondary" class="widget-area" role="complementary">
		<?php get_sidebar('interno'); ?>
	</div>
<?php get_footer(); ?>
