<?php
/**
 * Template Name: Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main id="site-content" role="main" class="container">

    <div class="col-mx-auto block">
        <?php

        if ( have_posts() ) {

            while ( have_posts() ) {
                the_post();

                get_template_part( 'template-parts/content-cover' );
            }
        }

        ?>
    </div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
