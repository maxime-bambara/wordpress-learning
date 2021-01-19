<?php
/**
 * @package Welcome User
 * @version 1.0.0
 */
/*
Plugin Name: Welcome User
Plugin URI: http://localhost/wordpress/plugins/
Description: Message de bienvenu pour l'utilisateur
Author: Maxime Bambara
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function say_hello(){
    echo '<p>Bonjour !</p>';
}

add_action('mon_hook', 'say_hello');

function say_name($first_name, $last_name){
    echo '<p>' . $first_name .' ' .$last_name .'</p>';
}

add_action('mon_hook', 'say_name', 10, 2);

function callback_admin_notices(){
    do_action('mon_hook', 'John', 'Doe');
}

add_action('admin_notices', 'callback_admin_notices');