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
define( 'DB_NAME', 'maya_didon' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@&_Hjd[fg<+7mST%i_q@|/j]IZh;`5^5>,7kQNZ-sH6N*=0^HCDVSF}tyn1(em_P' );
define( 'SECURE_AUTH_KEY',  'p&hU!fbx5z~(ih0$e|rgs;}I5GZ]}kGo2uMG)tm]j8)OE?Ul*0e@.0kLSe|L:&,+' );
define( 'LOGGED_IN_KEY',    'Vq-uZI7fiM!w&cAu=W3N+Jn&@D 4H J*fBWym+1ZPo~v/^rA84B0/~iS9dhK8:L^' );
define( 'NONCE_KEY',        'St,DPPXXx4m)uoAh.&@SDIib,<?mvJ*Sz_z+PQzt rGv5oe).juM^Z*N@<h% sbd' );
define( 'AUTH_SALT',        'U7b6>fnm-=<1W}8fo VJO/-r_w+D$w zOnwKN;Z1Mu;:`dk?jlP9d@.XK<Pt$1[]' );
define( 'SECURE_AUTH_SALT', 'Go^g}|Cv&PTCV(xB:IZW;=DlQ!iZMvi92B60b|4RHO!M$^dw`.<ubnT4UG&uFr1:' );
define( 'LOGGED_IN_SALT',   'B08L$1{O~+@:04=[+Xi-S9KnMv3_|6)Nb[v>((#!oZ(>Xz4+)n%TCZp</ yfY n+' );
define( 'NONCE_SALT',       'W_^2@Xz(E~D5xtl0AoNL(vP9OZW[R8{&^wbuY&&nhs}=eUu;JB:sHtCFC/LOa];f' );
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
