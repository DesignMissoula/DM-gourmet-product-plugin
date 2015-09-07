<?php

/*
Plugin Name: Gourmet Products
Plugin URI: http://sunrivergourmet.com/
Description: This is not just a plugin, its awesome in a can.
Author: Bradford Knowlton
Version: 1.0.2
Author URI: http://bradknowlton.com/
GitHub Plugin URI: https://github.com/DesignMissoula/DM-gourmet-product-plugin
*/

add_action( 'init', 'register_cpt_gourmet_product' );

function register_cpt_gourmet_product() {

    $labels = array( 
        'name' => _x( 'Gourmet Products', 'gourmet_product' ),
        'singular_name' => _x( 'Gourmet Product', 'gourmet_product' ),
        'add_new' => _x( 'Add New', 'gourmet_product' ),
        'add_new_item' => _x( 'Add New Gourmet Product', 'gourmet_product' ),
        'edit_item' => _x( 'Edit Gourmet Product', 'gourmet_product' ),
        'new_item' => _x( 'New Gourmet Product', 'gourmet_product' ),
        'view_item' => _x( 'View Gourmet Product', 'gourmet_product' ),
        'search_items' => _x( 'Search Gourmet Products', 'gourmet_product' ),
        'not_found' => _x( 'No gourmet products found', 'gourmet_product' ),
        'not_found_in_trash' => _x( 'No gourmet products found in Trash', 'gourmet_product' ),
        'parent_item_colon' => _x( 'Parent Gourmet Product:', 'gourmet_product' ),
        'menu_name' => _x( 'Products', 'gourmet_product' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 
            'slug' => 'product', 
            'with_front' => true,
            'feeds' => true,
            'pages' => true
        ),
        'capability_type' => 'post'
    );

    register_post_type( 'gourmet_product', $args );
}
