<?php
/**
 * @package Login Extension
 * @version 1.0.0
 */
/*
Plugin Name: Login Extension
Plugin URI: http://localhost/wordpress/plugins/
Description: Optimisation du login wordpress
Author: Maxime Bambara
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function welcome_message (){
    echo '<h1>Bienvenue sur ce site ! Veuillez vous connecter.</h1>';
}

add_filter('login_message', 'welcome_message');

function text_message(){
    echo '<p>Veuillez saisir votre nom d\'utilisateur et votre mot de passe.</p>';
}

add_action('login_form', 'text_message');