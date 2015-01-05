<?php
/**
 * 404.php
 *
 * The template displayed when the page a visitor is looking for cannot be found.
 *
 * @since 1.0
 *
 * @package WordPress
 * @subpackage Onyx
 */
?>
<!doctype html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h1>Error 404 - Page Not Found</h1>

                    <p>The page you are looking for could not be found. Please check that the URL you entered is correct or try the search box below.</p>

                    <?php get_search_form(); ?>

                </div><!-- / col-md-12 -->

            </div><!-- / row -->

        </div><!-- / container -->

        <?php get_footer(); ?>

    </body>
</html>