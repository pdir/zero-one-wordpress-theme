<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zero-one-wordpress-theme
 * @author theme.kitchen / pdir GmbH
 * @link https://theme.kitchen
 * @license pdir WordPress theme license
 * @since 1.0.0
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

get_header();
?>

<main id="site-content" role="main" class="container">

    <div class="col-mx-auto block">

        <?php

        if ( have_posts() ) {

            while ( have_posts() ) {
                the_post();

                get_template_part( 'template-parts/content', get_post_type() );
            }
        }

        ?>
    </div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
