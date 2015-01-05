<?php
/**
 * search.php
 *
 * Displays search results.
 *
 * @since 1.0
 *
 * @package WordPress
 * @subpackage Slate
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

                    <?php get_search_form(); ?>

                </div><!-- / col-md-12 -->

            </div><!-- / row -->

            <div class="row">

                <div class="col-md-12">

                    <?php
                    if(have_posts()) {

                        while(have_posts()) {
                            the_post();
                            ?>

                            <div class="post">

                                <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                                <div class="post-excerpt">

                                    <?php the_excerpt(); ?>

                                </div><!-- / post-excerpt -->

                            </div><!-- / post -->

                            <?php
                        }

                    } else {
                        ?>

                        <h1>No Results Found</h1>

                        <p>It looks like no results were found. Please try again.</p>

                        <?php
                    }
                    ?>

                </div><!-- / col-md-12 -->

            </div><!-- / row -->

        </div><!-- / container -->

        <?php get_footer(); ?>

    </body>
</html>