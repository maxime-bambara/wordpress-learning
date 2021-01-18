<?php
/**
 * @package Update Article
 * @version 1.0.0
 */
/*
Plugin Name: Update Article
Plugin URI: http://localhost/wordpress/plugins/
Description: Changement de texte des articles.
Author: Maxime Bambara
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

// Définition du filtre personnalisé
add_filter( 'filter_strtoupper', 'callback_filter_strtoupper');
// Fonction callback
function callback_filter_strtoupper($title) {
    return strtoupper($title);
}
// Déclaration du filtre WordPress
add_filter( 'the_title', 'callback_title' );
// Fonction callback
function callback_title( $title ) {
    return apply_filters( 'filter_strtoupper', $title );
}
// Fonction callback
function callback_post_signature($content) {
    global $post;
    $author_id = $post->post_author;
    $author = get_userdata($author_id);
    $name = ''.$author->display_name.'';
    return $content . '<p>Rédigé par ' . $name . '</p>';
}
// Déclaration du filtre WordPress
add_filter('the_content','callback_post_signature');