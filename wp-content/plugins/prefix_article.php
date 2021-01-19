<?php
/*
Plugin Name: Préfixer l'article
Plugin URI: http://localhost/wordpress/plugins/
Description: Préfixer chaque titre d'article
Author: John Doe
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function prefix_article($title){
    return 'Bamba\'s Article : ' . $title;
}

add_filter('the_title', 'prefix_article', 10, 1);