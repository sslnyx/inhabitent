<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <img class="site-logo" src="<?php echo get_template_directory_uri();?>/img/logos/inhabitent-logo-full.svg"/>


		<!-- Product terms -->
		<section class="product-info-container">
                <h1>Shop Stuff</h1>
                <?php
                $terms = get_terms( array(
                    'taxonomy'   => 'product_type',
                    'hide_empty' => 0,
                ) );
                if ( ! empty( $terms ) ) :
                    ?>
                    <div class="product-type-blocks">
                        <?php foreach ( $terms as $term ) :
                            ?>
                            <div class="product-type-block-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/img/product-type-logo/' . $term->slug; ?>.svg"
                                     alt="<?php echo $term->name; ?>"/>
                                <p><?php echo $term->description; ?></p>
                                <p>
                                    <a href="<?php echo get_term_link( $term ); ?>"
                                      class="btn"><?php echo $term->name; ?> Stuff</a>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>


      <section class="journals">
			<h1>inhabitent journal</h1>
			
<?php			
$args = array(
   'order' => 'ASC',
   'posts_per_page' => 3,
   'post_type' => 'post',
);
$journals = new WP_Query( $args ); ?>

<?php $journals = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $journals->have_posts() ) : ?>
<div class="journal-blocks">
	 <?php while ( $journals->have_posts() ) : $journals->the_post(); ?>
	 
<div class="journal-wrapper">
    <div class="post-thumbnail">
	 <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
</div>
			<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
			<!-- / -->
			 <?php 
			//  inhabitent_posted_by(); 
			 ?>
			
			<h1><?php the_title(); ?></h1>
			
			<a class="buttonReadMore" href="<?php the_permalink();?>"> read more</a>
		</div><!-- .entry-meta -->


</div><!-- .journal-wrapper -->
	 <?php endwhile; ?>

</div><!-- .journal-blocks -->

<?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</section>

<section class="latest-adventure">
			<h1>latest adventure</h1>
    
<?php			
$args_adventure = array(
   'order' => 'ASC',
   'posts_per_page' => 4,
   'post_type' => 'adventure',
);
$adventure = new WP_Query( $args_adventure ); ?>

<?php $adventure = new WP_Query( $args_adventure ); /* $args set above*/ ?>


<?php if ( $adventure->have_posts() ) : ?>
<div class="adventure-containor">
	 <?php while ( $adventure->have_posts() ) : $adventure->the_post(); ?>
	 
<div class="adventure-wrapper">
    <div class="adventure-thumbnail">
	 <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
</div>
			<div class="entry-meta-adventure">
			
            <h1><?php the_title(); ?></h1>

			<a class="buttonReadMoreAdv" href="<?php the_permalink();?>"> read more</a>
            
        </div>


        
        
        <!-- .entry-meta -->


</div>
<!-- adventure-wrapper -->
	 <?php endwhile; ?>

</div>
<!-- .journal-blocks -->
<a class="btn" href="<?php echo esc_url( home_url( '/' )).'adventure/';?>"> more adventures</a>


	 
<?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</section>







			

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>