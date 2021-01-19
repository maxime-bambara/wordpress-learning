<?php
/*
Plugin Name: Post Title with author Name
Plugin URI: http://localhost/wordpress/plugins/
Description: Ajout du nom de l'auteur dans le titre des articles
Author: John Doe
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function callback_the_title($title) {
    global $post;
    $author_id = $post->post_author;
    $author = get_userdata($author_id);
    $name = $author->display_name.'';

    return $title.' par '.$name;
}

add_filter('the_title', 'callback_the_title');