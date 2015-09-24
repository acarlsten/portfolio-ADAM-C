<?php
/**
 * Pico Configuration
 *
 *  This is the configuration file for Pico. It comes loaded with the
 *  default values, which can be found in the get_config() method of
 *  the Pico class (lib/pico.php).
 *
 * @author Gilbert Pellegrom
 * @link http://picocms.org
 * @license http://opensource.org/licenses/MIT
 * @version 0.9
 *
 * To override any of the default settings below, copy this file to
 * `config.php`, uncomment the line and make and save your changes.
 */

/*
 * BASIC
 */
// $config['site_title'] = 'Pico';              // Site title
// $config['base_url'] = '';                    // Override base URL (e.g. http://example.com)

/*
 * THEME
 */
 $config['theme'] = 'addec';                // Set the theme (defaults to "default")
// $config['twig_config'] = array(              // Twig settings
//	'cache' => false,	                        // To enable Twig caching change this to CACHE_DIR
//	'autoescape' => false,                      // Autoescape Twig vars
//	'debug' => false                            // Enable Twig debug
// );

/*
 * CONTENT
 */
// $config['date_format'] = '%D %T';             // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php
// $config['pages_order_by'] = 'alpha';           // Order pages by "alpha" or "date"
 $config['pages_order'] = 'desc';                // Order pages "asc" or "desc"
// $config['excerpt_length'] = 50;                // The pages excerpt length (in words)
 $config['content_dir'] = 'content-sample/';    // Content directory
 $config['pages_order_by'] = 'placing';
/*
 * TIMEZONE
 */
 date_default_timezone_set('CET');              // Timezone may be reqired by your php install

/*
 * CUSTOM
 */
// $config['custom_setting'] = 'Hello';           // Can be accessed by {{ config.custom_setting }} in a theme

// Keep this line
return $config;
