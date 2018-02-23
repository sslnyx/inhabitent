<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );


/**
 * customize the logo WP login page.
 */

function my_login_logo() { ?>
	<style type="text/css">
			#login h1 a, .login h1 a {
					background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logos/inhabitent-logo-text-dark.svg);
	height:65px;
	width:320px;
	background-size: 320px 65px;
	background-repeat: no-repeat;
				padding-bottom: 30px;
			}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function inhabitent_login_url($url) {
    return get_home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_url' );

function inhabitent_login_title(){
	return 'Inhabitent';
}
add_filter('login_headertitle','inhabitent_login_title');

function hero_style() {
	if (!is_page_template('page-templates/about.php')) {
			return;
	}
					$image = CFS()->get( 'hero_image' );
					$banner_css = ".page-template-about .site-header{
							background: 
							linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
							url({$image}) no-repeat center bottom;
							background-size: cover, cover;
							height: 100vh;
						}";
					wp_add_inline_style ('inhabitent-style', $banner_css);
	}
add_action( 'wp_enqueue_scripts', 'hero_style');

function hero_style_front() {
	if (! is_front_page() ) {
			return;
	}
					$imagef = CFS()->get( 'hero_image' );
					$banner_css = ".page-template-default .front-hero{
							background: 
							linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
							url({$imagef}) no-repeat center bottom;
							background-size: cover, cover;
							height: 100vh;
						}";
					wp_add_inline_style ('inhabitent-style', $banner_css);
	}
add_action( 'wp_enqueue_scripts', 'hero_style_front');