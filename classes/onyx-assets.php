<?php
/**
 * Onyx Assets
 *
 * Utilizes Slate to load in CSS and JavaScript assets.
 *
 * @since 1.0
 *
 * @package WordPress
 * @subpackage Onyx
 */

class Onyx_Assets {

    public function __construct() {

        // Hook into the wp_enqueue_scripts action to add the CSS and JavaScript requests.
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));

    }

    /**
     * Load the CSS and JavaScript requests.
     */
    public function load_assets() {

        $this->load_css();

        $this->load_js();

    }

    /**
     * Load the CSS requests.
     *
     * @since 1.0
     */
    public function load_css() {

        new Slate_CSS('bootstrap/css/bootstrap.min.css', '', true);
        // new Slate_CSS('font-awesome-4.2.0/css/font-awesome.min.css', '', true);
        // new Slate_CSS('swipebox/css/swipebox.min.css', '', true);
        new Slate_CSS('main.css');

    }

    /**
     * Load the JavaScript requests.
     *
     * @since 1.0
     */
    public function load_js() {

        new Slate_Jquery;
        new Slate_JS('min/all.js');
        // new Slate_JS('swipebox/js/jquery.swipebox.min.js', '', true);
        // new Slate_JS('jquery.cycle2.min.js', '', true);

    }

}