<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-single-product">
		<main id="main" class="site-main-single-product" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="article-wrapper-single-product">
		
		<div class="product-image">

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
</div><!-- .entry-header -->

	<div class="entry-content-single-product">
	<?php the_title( '<h1>', '</h1>' ); ?>
		
    <?php echo CFS()->get('price'); ?>
		<?php the_content(); ?>

	</div><!-- .entry-content -->

			</div>

			</article>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		
	</div><!-- #primary -->
	

<?php get_footer(); ?>
