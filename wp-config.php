<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_local' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$A#76OoWLMH}G1OmJqIOB[_<I d>Tk}-VpVr`Q?NaS8dB|@^koVLjlEXZXf/*R-n' );
define( 'SECURE_AUTH_KEY',  'f0J8fWuOXc~.}pXo%M1zqPsep7Y=d8ZI^!Qw;l1Nl#iUu>o2XTt|[m&hgZ Kg4~M' );
define( 'LOGGED_IN_KEY',    '?~M6Fb#eE(DD:6m[m60H:d@MBr$5We!T{]mv?dM=:{t@`*ftMXVR[|{ea;7B5Up^' );
define( 'NONCE_KEY',        '-oi+ga% -Z3gahiS=RsvHg-ua,1W/P)?x1JHx;H;x#a1K:qz&?}6jQJZIW%x;F_P' );
define( 'AUTH_SALT',        'adY+i>JiL^6}+RAFKDlU&#u?Vm}z&W@@:A<]hOJ0s<4+7/[6a;*hh9{pXSE$fJcS' );
define( 'SECURE_AUTH_SALT', ']bTxk.Sv@p<9Sv$7agH(Mu>]zrB!*Oa2J@J0=8.R #p,l`>HRU~ wT7pWE8^rV_u' );
define( 'LOGGED_IN_SALT',   '/9~=^j45Ad1 @u}mNK`Wml)/VToT_|lW))3&}ed[|lS62.R-%=xc/G!a$` }~sGA' );
define( 'NONCE_SALT',       'f%?/urZ@rL e0@XJ4.iUYf<j/!6d~?~xm]Utn^uR.c<sC]#Vnl$O/1hpMra:R`{c' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
