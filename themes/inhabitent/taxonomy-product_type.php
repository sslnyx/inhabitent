<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="menu-holder">
</section>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="products-wrapper">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="single-product-wrapper">
							<div class="thumbnail-wrapper">
				<?php
							 if ( has_post_thumbnail() ) : ?>
							 	<a href="<?php the_permalink();?>"> <?php the_post_thumbnail('large' ); ?></a>
							
						<?php endif; ?>
						</div>
						<div class="product-name-price">
				
				<?php	$price =  CFS()->get( 'price' ); ?>
					
				
				<?php the_title( sprintf( '<p class="entry-title">'), '..........'.$price.'</p>' ); ?>				

												</div> <!-- product-name-price -->
				</div><!--single-product-wrapper -->
			<?php endwhile; ?>
</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
