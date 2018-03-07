<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function product_type_taxonomy() {

	$labels = array(
		'name'                       => 'Product_Type',
		'singular_name'              => 'Product_Type',
		'menu_name'                  => 'Product Type',
		'all_items'                  => 'All Product Type',
		'parent_item'                => 'Parent Product Type',
		'parent_item_colon'          => 'Parent Product Type:',
		'new_item_name'              => 'New Product Type',
		'add_new_item'               => 'Add New Product Type',
		'edit_item'                  => 'Edit Product Type',
		'update_item'                => 'Update Product Type',
		'view_item'                  => 'View Product Type',
		'separate_items_with_commas' => 'Separate Product Types with commas',
		'add_or_remove_items'        => 'Add or remove Product Types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Product Types',
		'search_items'               => 'Search Product Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Product Types',
		'items_list'                 => 'Product Types list',
		'items_list_navigation'      => 'Product Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'product_type_taxonomy', 0 );

// Register Custom Taxonomy
function adventure_taxonomy() {

	$labels = array(
		'name'                       => 'Adventures',
		'singular_name'              => 'Adventure',
		'menu_name'                  => 'Adventures',
		'all_items'                  => 'All Adventures',
		'parent_item'                => 'Parent Adventure',
		'parent_item_colon'          => 'Parent Adventure:',
		'new_item_name'              => 'New Adventure Name',
		'add_new_item'               => 'Add New Adventure',
		'edit_item'                  => 'Edit Adventure',
		'update_item'                => 'Update Adventure',
		'view_item'                  => 'View Adventure',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove Adventures',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Adventures',
		'search_items'               => 'Search Adventures',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Adventures',
		'items_list'                 => 'Adventures list',
		'items_list_navigation'      => 'Adventures list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'adventure', array( 'post' ), $args );

}
add_action( 'init', 'adventure_taxonomy', 0 );