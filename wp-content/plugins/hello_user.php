<?php
/**
 * @package Hello User
 * @version 1.0.0
 */
/*
Plugin Name: Hello User
Plugin URI: http://localhost/wordpress/plugins/
Description: Affiche dans les notifs admin un message personnalisé.
Author: Maxime Bambara
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function hello_user(){
    $current_user = wp_get_current_user();
    echo 'Bienvenu ' . $current_user->display_name . ' ! Votre adresse mail est : ' . $current_user->user_email;
}

add_action('admin_notices', 'hello_user');