<?php
/**
 * functions.php
 *
 * Used for enabling and configuring certain WordPress features. Should *not* be a dumping
 * ground for random PHP code and functions.
 *
 * @since 1.0
 *
 * @package WordPress
 * @subpackage Onyx
 */

/**
 * Load Theme Assets
 */
$onyx_assets = new Onyx_Assets;

/**
 * Menu Registration.
 */
register_nav_menus( array(
    'primary' => 'Primary Menu',
) );