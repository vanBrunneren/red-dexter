<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define( 'DB_NAME', 'red_dexter' );

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define( 'DB_USER', 'red-dexter' );

/** Ersetze password_here mit deinem MySQL-Passwort */
define( 'DB_PASSWORD', 'bRo5K8lIP8y3' );

/** Ersetze localhost mit der MySQL-Serveradresse */
define( 'DB_HOST', 'localhost' );

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define( 'DB_CHARSET', 'utf8mb4' );

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define( 'AUTH_KEY',         'v|85=6=L#*&B v4Fp9d>AV1bX/C|4KNCq[,D4Ib5moj;Vk#`<A?N8qnV;GZcLRNs' );
define( 'SECURE_AUTH_KEY',  'X`h+$vfEFch}B4-Wn<#>Pk6zbK=0FCGUV<RY?:EtJxue&pyH*K4??Hu_)^Yz6PkZ' );
define( 'LOGGED_IN_KEY',    'sHt(mY0 n/L*`O4k7Re-2RJ`[P=nd7SurO.Xi 2N27[m+8!~mLh}FAL[pQ0S$l)(' );
define( 'NONCE_KEY',        'kox8{<=WgUkt3 myo,?6U I~^JW34frHpR,8@~qRil(iV>HDW0yj@9%xf>[rFdR-' );
define( 'AUTH_SALT',        '&j5m1D,=V >fa.$Xm-qR1uWl9yAv[sX1xC*YY~4f|Wlt%lrP3!QV(QrwV!oJe2~0' );
define( 'SECURE_AUTH_SALT', '60;9q2ge71/pr?Vn;F,T?FSZ]C2GQ7%e1LXMN]+wV8wWyZ1#jNf?U7ApW6.0[3/]' );
define( 'LOGGED_IN_SALT',   '>d?faf(sl/)+&H.iy8sH+i:f8h:Q0+Z&c(Y`_Svx|}m0}Y>+%4^zK+r`cSKZQT;W' );
define( 'NONCE_SALT',       'cIuyB{`-)#97jRA@[xkfER)~t}{q@jg0tz?!Z-#i$b_CkojG_$rA$pUdm.bczZ|E' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix = 'rd';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
