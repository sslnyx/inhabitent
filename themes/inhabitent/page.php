<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="find-us-title">
			<h1> find us</h1>
            <iframe class="find-us-map" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683120380863!2d-123.14036234931521!3d49.2634517799535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H!5e0!3m2!1sen!2sca!4v1460954232707" allowfullscreen="allowfullscreen" width="760" height="300" frameborder="0"></iframe>
				

				
				<h1>we take camping very seriously.</h1>
				<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
				<h1>send us email</h1>		
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<form>
						</form>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
<?php get_sidebar(); ?>
		
	</div><!-- #primary -->

<?php get_footer(); ?>
