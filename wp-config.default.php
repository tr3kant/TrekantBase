<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 *
 * Please note if you add constants in this file (i.e. define statements)
 * these cannot be overridden in environment config files.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v:edkHSXj(b|#DwZ[iv+dZ(HpE-1/ABxa-A#m_pj;/83P^omd->Q+Iwm<[akb|+(');
define('SECURE_AUTH_KEY',  '*q%RC+Ygo6fnaOVl2`U-+=$c~XnPuzzv=1^.pO97[,?^iDF JVs,v8|aS%%pu-]$');
define('LOGGED_IN_KEY',    '*][%TAm:6 UTrw4BU} QSTbG0`Nr]UyPnr{CQ]^;l$Np4g2oex]--SjBG).Ab6;J');
define('NONCE_KEY',        'Q_`2-I|c(T7wzNjw6h[`hC^hCmaG}8#VtLbo<dDa[Xvs`0zz?N{r,`-lDAQ6/{|~');
define('AUTH_SALT',        'uqo~[Nou&z#<JpIjSphr3*2NV]]CtaNKcd<6b5Ygt~1~|[Ul|xguP/$aAw{]<mso');
define('SECURE_AUTH_SALT', 'Lw{2^TP_0=5,deBw&z4,14i]r]N]F.Zl5IJD@{dequTGb[ELm%*G7kQR^|^vqIQD');
define('LOGGED_IN_SALT',   '8lVd|U{|lm|:#a?2z]P>X-DwxC9yT^5YH;+`x4N`[2dMoQjh=.sN(eiCa1G#E?>~');
define('NONCE_SALT',       '_1vHkRbOId!&r=|>*++*()C?Li4oMDn6B1),-=!JQ:Vt~Sc}w-A(q4}n&iP|rs]m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * Increase memory limit.
 */
define('WP_MEMORY_LIMIT', '64M');