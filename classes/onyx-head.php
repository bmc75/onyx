<?php
/**
 * Onyx Head
 *
 * Hooks into the wp_head action and sets up appropriate meta tags and anything else that
 * needs to be place inside the HTML head tag.
 *
 * @since 1.0
 *
 * @package WordPress
 * @subpackage Onyx
 */

class Onyx_Head {

    public function __construct() {

        add_action('wp_head', array($this, 'head_output'));

    }

    /**
     * Place anything to be output in the HTML head tag within this method.
     *
     * @since 1.0
     */
    public function head_output() {
        ?>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo _vendor_uri; ?>/html5shiv.js"></script>
        <script src="<?php echo _vendor_uri; ?>/respond.js"></script>
        <style>
            .container
        {
            display:table;
            width: 100%;
        }
        .row
        {
            height: 100%;
            display: table-row;
        }
        .col-sm-4
        {
            display: table-cell;
        }
        </style>
        <![endif]-->

        <?php
    }

}