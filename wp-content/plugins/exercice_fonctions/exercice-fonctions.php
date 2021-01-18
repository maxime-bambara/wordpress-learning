<?php
/**
 * @package Exercice fonctions
 * @version 1.0.0
 */
/*
Plugin Name: Exercice fonctions
Plugin URI: http://localhost/wordpress/plugins/
Description: Exercice de création de fonction wordpress
Author: Maxime Bambara
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function affichage_exercice_fonction(){
    echo 'Bienvenue sur la page d\'administration de mon extension !';
}

function mon_menu_admin() {
    add_menu_page( 'Exercice fonctions',
        'Exercice fonctions Wordpress',
        'administrator',
        'exercice_fonctions/exercice-fonctions.php',
        'affichage_exercice_fonction',
        'dashicons-admin-network',
        2 );
}

add_action('admin_menu', 'mon_menu_admin') ;

function insert_short_welcome(){
    return '<h1>Bonjour et bienvenue dans mon site WordPress!</h1>';
}

add_shortcode('bonjour',
    'insert_short_welcome');