<?php

/*
Plugin Name: Supprimer les filtres
Plugin URI: http://localhost/wordpress/plugins/
Description: Supprime tous les filtres liés aux extensions
Author: John Doe
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function removeAll(){
    remove_all_filters('the_title');
    remove_all_filters('the_content');
}

add_action('wp_loaded', 'removeAll');