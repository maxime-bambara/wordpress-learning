<?php

/**
 * @package Post Recipe
 * @version 1.0.0
 */
/*
Plugin Name: Post Recipe
Plugin URI: http://localhost/wordpress/plugins/
Description: Optimisation du login wordpress
Author: Maxime Bambara
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/
function recipe_post_type(){
    register_post_type( 'cuisine',
    // Options
        array(
            'labels' => array(
                'name' => __( 'Recettes de cuisine' ),
                'singular_name' => __( 'Recette de cuisine' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'cuisine'),
            'show_in_rest' => true,
        )
    );
}


add_action('init', 'recipe_post_type');