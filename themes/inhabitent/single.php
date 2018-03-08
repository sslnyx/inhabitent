<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="journal-page-blocks">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php inhabitent_entry_footer() ?>
			<div class="buttonSet">
			<a class="buttonReadMore" href="#"><i class="fa fa-facebook"></i>Like</a>
			<a class="buttonReadMore" href="#"><i class="fa fa-twitter"></i>Tweet</a>
			<a class="buttonReadMore" href="#"><i class="fa fa-pinterest"></i>Pin</a>
</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
<?php get_sidebar(); ?>
		
	</div><!-- #primary -->

<?php get_footer(); ?>
