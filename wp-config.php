<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'wptenta');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qy=j3.|n8Gg_#FJ,&^n mPn!pxpV2m&L7aTDb8zHa]N.#6YtG,1T<5*gD5skKG}5');
define('SECURE_AUTH_KEY',  'j6/jrm0}g].;H<1^{YfE?Z~(SYM+RL>I%vh,1F-*;=UZ 41GH=VXTo&)^S?[@^c4');
define('LOGGED_IN_KEY',    'Uo99.yj+%,XVug5uT_Bw.j= ;PD6O+.Dh=AYJNOuj;1R;zi-))h5/Wg4l~K5r!q@');
define('NONCE_KEY',        '%(EnR4F!i#Sn/oVY7mEkhHw-**~LrxJY4>RYKAu:XC6&%Ly5N}wA$9?;5o>e,X!2');
define('AUTH_SALT',        '1KIU7U5mr/PP0&(4WA`1z>DOW5@do0u8/7kanD]~STfK]NRY[Rn,SywE#{y<uY$+');
define('SECURE_AUTH_SALT', 'oYp*LkHqeb wBCBbmO<F]!Bd`~N:CxrhwO8Sv<~&MXRPYUOb)GI_9K}}?vZI)&as');
define('LOGGED_IN_SALT',   '=:dI)vwKzt3B-R-SWl!ciX3,}|^dA+L&+EW1YN[=S@jsd4(IE/?5Y8Vza`*5mV5p');
define('NONCE_SALT',       'Pvft)6#u@LsWfcRZz(1fyZu!@i1y.k(Y,g,K?VxAv4~_}N:=c3>7N%Hl3!mUs=9q');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');