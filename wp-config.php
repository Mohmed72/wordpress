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
define( 'DB_NAME', 'MaBase' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4r/8zmoitmi>q3@JvgdMG|KJnaHnT @aLPP&?04ILFEmWq{Tp%JEeE)~91KupbBB' );
define( 'SECURE_AUTH_KEY',  '`ik/;p,EO?Qf y;A|Mi/4hb!b`-N.t3kM~!uE@^{a<mjh^t:qD2Z,g&M|jl?0kgA' );
define( 'LOGGED_IN_KEY',    'f]!Ws-G&a_C&cW?@6y&35afwCPbu!X*h}>_(>Hi(o.`yNAdJXntJ1]EVG4)Ir{Wc' );
define( 'NONCE_KEY',        ':JW}C&c%`c9Mi9[#X,B.^(E`Xjgi^cOpVx}t2M[OJKlt2+YR]D.DG$Nqc%a|+KVs' );
define( 'AUTH_SALT',        '#RfL<3n7v5U J1uQ@>D~j>Pl5`r36- GNbiFfR9UiCcH) ,rII~O 3Ed8_8EJ2x*' );
define( 'SECURE_AUTH_SALT', 'd9_$H4Pfj%qyd!-RT:Qf53tSM$n.On5/U9jS:;|$Nnzaj>3Rerkn6I5G$cWI?uq?' );
define( 'LOGGED_IN_SALT',   '8#iSy{sHua(eUn3i7Iw,C-cWkB$.=V#hH0f|%+;}g}t$*>9(S~kpw+aJ#Zz8qYFY' );
define( 'NONCE_SALT',       'x2>_Fu}N[z{HJ86Aen{l@@7sD}([Rz e-DgPBQ?Hm!1,L:2O2P2CP{TFd-1kEpcj' );
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
