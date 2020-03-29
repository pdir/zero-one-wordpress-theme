<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
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

/*
 * Generate a unique ID for each form and a string containing an aria-label if
 * one was passed to get_search_form() in the args array.
 */
$unique_id = zeroone_unique_id( 'search-form-' );

$aria_label = ! empty( $args['label'] ) ? 'aria-label="' . esc_attr( $args['label'] ) . '"' : '';
?>
<form role="search" <?php echo $aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <label class="form-label" for="<?php echo esc_attr( $unique_id ); ?>">
		    <span class="screen-reader-text"><?php _e( 'Search for:', 'zeroone' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>
	    </label>
        <input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="search-field form-input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'zeroone' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </div>
    <div class="form-group">
	    <input type="submit" class="search-submit form-input" value="<?php echo esc_attr_x( 'Search', 'submit button', 'zeroone' ); ?>" />
    </div>
</form>
