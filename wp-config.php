<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'air-woocommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'rebellion08' );

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
define( 'AUTH_KEY',         'Q(){*7%h(5*/L~*b1SM2<gO#h4]#o>< xumu?r$vqrx8z.)HjXn@R2@3w@dI8k<7' );
define( 'SECURE_AUTH_KEY',  'd%q;Ps]Y=,CfJCdpIEtDg4?V*V>bLXT).-kVsW9O#Bx]&#!NWz1A%kbprTTZU3y#' );
define( 'LOGGED_IN_KEY',    'wqDL3,k5J?E^J(W9Tkc/f1w@H^]s 9T@PkPia-mT0l){<=wrm][8rx,s](,ROE+0' );
define( 'NONCE_KEY',        '@+u([N M?1DUC)T~RTRYIiPOq)BRk7yQ)>@EsMC{+(u_3Sa!4;aG&UVbwXca%K5b' );
define( 'AUTH_SALT',        'FK+*9VAmj=e)R:44qpIY9nEdhRT4?SuyR=#lj{$2YQj.j-Ok9zXKoP8_IM{P@<@S' );
define( 'SECURE_AUTH_SALT', 'J2*[0?ctk3O@xIX&{v_OZ@;r`0RZ;/I?>ESJ$&110Hbci#~c%_bXgN2VG,Nsk9Dz' );
define( 'LOGGED_IN_SALT',   'Z[sCEv~3v?Oidx*f83h1IS2 5ff0J!JrnZ4,nglCi^r^~LkEZ(@t$8e.)c4AL@vH' );
define( 'NONCE_SALT',       'Q|w EhER?[jG/V[b%`oup1fE!llu<TT1xtcFw2x]Es1Nv^NQ50/KP8$+>i3dH6=g' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');