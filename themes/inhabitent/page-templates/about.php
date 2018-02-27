<?php
/**
 * Template Name: About page
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-about">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
	<header class="entry-header-about">
		<?php the_title( '<h1 class="entry-title-about">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  
  <?php 
  // echo CFS()->get('hero_image');
  ?>

	<div class="entry-content-about">
  
    <?php the_content(); ?>
    <h2>Our Story</h2>
    <?php echo CFS()->get('our_story');?>
    <h2>Our Team</h2>
    <?php echo CFS()->get('our_team');?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
