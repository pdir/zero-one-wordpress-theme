<?php
/**
 * The template for displaying the 404 template in the Zero One theme.
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

	<div class="section-inner thin error404-content col-mx-auto block">

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'zeroone' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'zeroone' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'zeroone' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
