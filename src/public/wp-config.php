<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'project');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'project');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '0000');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w{t=LiAby;g/xAt55H7b2!Sx)2:11B[,iUA-Vqpa-EPvdXK]Zul4ONpeasq!.^cB');
define('SECURE_AUTH_KEY',  'fwS:[@p/]tf9>%m%g*W(`1ctT%RQqlBY?]aMj~K0dXQ;p2lL+4;Y>ch)Ej AzAu9');
define('LOGGED_IN_KEY',    'y#8YzJDoa#u8u}%<1W)}sL>{x7C?djIQc9nZu!&.;M^%Ay==WK}*XX Y4S(g@86e');
define('NONCE_KEY',        'g4,]fdqZjT[_hZ{UXle,u3&Kzdg^C.tEJ4nk<1vG%jBBaeih>x79gn.HraW*PRi|');
define('AUTH_SALT',        '$*mks6BFdH7U6oAP|;;Ye6KaaarX2[M>OukhHh!wMi.B#Cq3lQcHRK|5cdq6U9im');
define('SECURE_AUTH_SALT', '(.=;f?W.T!#P*g?~S5CyfI<N0RSNxzG|!MQBXy^3P!DY`A}6-5v~A#eHz3Wef dH');
define('LOGGED_IN_SALT',   'mR}PQvFLLAkhs*|2B,nw;-2|#se1JyNXc_}[oqaO ;1afp_:=7;JsS&G;`}@v8qG');
define('NONCE_SALT',       '_}cinuBo@YvI)5,=@Cvuf$@x(B1PhJ;WorC$_dD;?a|jJP5Yi%gz~q*<sE0O/j%*');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');