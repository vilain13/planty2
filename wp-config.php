<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':I3mk794PPXpAd@77_TB5=yX4_oSrd5E50u_GbGNf8DSb${;{>>fNP+V&?XJLNl/' );
define( 'SECURE_AUTH_KEY',  'OS4^aD<4[)JDJZ|dzPA(o`P-,dT|Cx@$I9QB@SK9B[5KvqJu0Xp[Z>K`@{KG~.(R' );
define( 'LOGGED_IN_KEY',    '#d_-c+?zo&[}wX:0I7:>+T#S%k%4<F| Yhlbo6IlOy-/(XB7%88AQ0JS,w7OA)b,' );
define( 'NONCE_KEY',        '4[Yb@9NxszPpS/sAc|ho,(d~vWhC_D-coW;zLeMVdo@F]S)HRi2|[W>sQsvg~J$Q' );
define( 'AUTH_SALT',        's<h/LzGGLYf6m3hCGvS_?J9eg&}s53:4gA@-X2[$$P^P|T,gRcE5BJ|aJ 9W9:J_' );
define( 'SECURE_AUTH_SALT', ' /z>Qe/`}L`#%<tCY5w3ZlrG76!1TM|x9&a,4pKAE^[65aBGJe0Q*hSFwUo$9;}Z' );
define( 'LOGGED_IN_SALT',   'Rd4?gonFKT94t5saF/{F={{5(E8 M-IjzPx,nCJC0 3Y2)`6c4u|(;5rvjT(k;A8' );
define( 'NONCE_SALT',       'Bf%ZNp/*MP(NKGTIB_`[ M|Fg0CnKRDJbJ6Vx;#JI)0>KgsoyF>+K]:|Diw*u~&v' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
