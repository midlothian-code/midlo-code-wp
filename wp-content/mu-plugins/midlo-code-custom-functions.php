<?php
/**
 * @link https://midlothiancode.com
 * @since 1.0.0
 * @package Midlo_Code_Custom_Functions
 *  
 * @wordpress-plugin
 * Plugin Name: Midlo Code Custom Functions
 * Plugin URI: https://midlothiancode.com
 * Description: Custom functions required for Midlothian Code
 * Version: 1.0.0
 * Author: Midlothian Code
 * Author URI: https://midlothiancode.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: midlo-code-custom-functions
 * Domain Path: /languages
 */
/**
 * Remove admin toolbar
 */
add_filter( 'show_admin_bar', '__return_false' );

function resources_post_type_init() {
  $labels = array(
    'name'                  => _x( 'Resources', 'post type general name', 'midlo-code-custom-functions' ),
    'singular_name'         => _x( 'Resource', 'post type singular name', 'midlo-code-custom-functions' ),
    'menu_name'             => _x( 'Resources', 'admin menu', 'midlo-code-custom-functions' ),
    'name_admin_bar'        => _x( 'Resource', 'add new on admin bar', 'midlo-code-custom-functions' ),
    'add_new'               => _x( 'Add New', 'resource', 'midlo-code-custom-functions' ),
    'add_new_item'          => __( 'Add New Resource', 'midlo-code-custom-functions' ),
    'new_item'              => __( 'New Resource', 'midlo-code-custom-functions' ),
    'edit_item'             => __( 'Edit Resource', 'midlo-code-custom-functions' ),
    'view_item'             => __( 'View Resource', 'midlo-code-custom-functions' ),
    'view_items'            => __( 'View Resources', 'midlo-code-custom-functions' ),
    'all_items'             => __( 'All Resources', 'midlo-code-custom-functions' ),
    'archives'              => __( 'Resources Archives', 'midlo-code-custom-functions' ),
    'attributes'            => __( 'Resources Attributes', 'midlo-code-custom-functions' ),
    'insert_into_item'      => __( 'Insert into resource', 'midlo-code-custom-functions' ),
    'uploaded_to_this_item' => __( 'Uploaded to this resource', 'midlo-code-custom-functions' ),
    'search_items'          => __( 'Search Resources', 'midlo-code-custom-functions' ),
    'parent_item_colon'     => __( 'Parent Resources:', 'midlo-code-custom-functions' ),
    'not_found'             => __( 'No resources found.', 'midlo-code-custom-functions' ),
    'not_found_in_trash'    => __( 'No resources found in Trash.', 'midlo-code-custom-functions' ),
  );

  $args = array(
    'labels'                => $labels,
    'description'           => __( 'Description.', 'midlo-code-custom-functions' ),
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'resources' ),
    'capability_type'       => 'post',
    'has_archive'           => true,
    'hierarchical'          => false,
    'menu_position'         => null,
    'menu_icon'             => 'dashicons-awards',
    'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
    'taxonomies'            => array( 'resource_type' ),
    'can_export'            => true,
  );

  register_post_type( 'resources', $args );
}
add_action( 'init', 'resources_post_type_init' );

function resource_taxonomy() {
  $labels = array(
    'name' => _x( 'Resource Types', 'midlo-code-custom-functions' ),
    'singular_name' => _x( 'Resource Type', 'midlo-code-custom-functions' ),
    'menu_name' => _x( 'Resource Types', 'midlo-code-custom-functions' ),
    'all_items' => __( 'All Resource Types', 'midlo-code-custom-functions' ),
    'edit_item' => __( 'Edit Resource Type', 'midlo-code-custom-functions' ),
    'view_item' => __( 'View Resource Type', 'midlo-code-custom-functions' ),
    'update_item' => __( 'Update Resource Type', 'midlo-code-custom-functions' ),
    'add_new_item' => __( 'Add New Resource Type', 'midlo-code-custom-functions' ),
    'parent_item' => __( 'Parent Resource Type', 'midlo-code-custom-functions' ),
    'parent_item_colon' => __( 'Parent Resource Type:', 'midlo-code-custom-functions' ),
    'search_items' => __( 'Search Resource Types', 'midlo-code-custom-functions' ),
    'popular_items' => __( 'Popular Resource Types', 'midlo-code-custom-functions' ),
    'separate_items_with_commas' => __( 'Separate resource types with commas', 'midlo-code-custom-functions' ),
    'add_or_remove_items' => __( 'Add or remove resource types', 'midlo-code-custom-functions' ),
    'not_found' => __( 'No resource types found.', 'midlo-code-custom-functions' ),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'hierarchical' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'resource-type' ),
  );

  register_taxonomy( 'resource_type', 'resources', $args );
}
add_action( 'init', 'resource_taxonomy' );
