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
 define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'nverbrug' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'pass' );

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
define('AUTH_KEY',         'H]zoQ-VnQ-c_#;<-<K`@oa|FZ%-oiC[@z(bB|s)Wk2Pid@]Y7LCrtC&; 9Vd&2FA');
define('SECURE_AUTH_KEY',  'n$xQZQj@qg]5AtwzXj6-+Yx#3+n#+}{*e2<y!FuuetH?F3kJ<KA#+mdF4{+:3flX');
define('LOGGED_IN_KEY',    'H&0q+E<O1Y_^MG.pM9SH#Ps}vA+u{s7DRS/6+NZd,+c~`]t1R=@~}WL??Ll5{/y:');
define('NONCE_KEY',        'Ib{JS0-p@nux[W@t!^N!51p/A]I; kgyC$r4_fE*1Vy[DJn/|N}_96QSeZwYja1E');
define('AUTH_SALT',        'e^,Yy5NLk8hWOUYQ [@d(bq> 7Dtnzyi7}(o~qL(r&]WFApc^j} s|[nT/_2s88~');
define('SECURE_AUTH_SALT', '![[i(Pd}-n,OU#ewyq:TN4m3Dc4Xz+%)[XI9^=dEZv Q?|C|)P=|f?(y!30mW@cp');
define('LOGGED_IN_SALT',   '[.`|>[M,}Jpwi/ZpBgfx/hPF]fX h-h?i~-W3XG6H&2XW;bC5h<qwz= YA_HO[q|');
define('NONCE_SALT',       '(XZ~,wE,-]lM7h;F+. +J#W}{%goRQpFRChH~21^rn,80w1O9U,$M0{l3q.&-H0X');


/**
* Préfixe de base de données pour les tables de WordPress.
*
* Vous pouvez installer plusieurs WordPress sur une seule base de données
* si vous leur donnez chacune un préfixe unique.
* N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
