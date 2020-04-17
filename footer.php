<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner container">

					<div class="footer-credits col-mx-auto block">

						<p class="footer-copyright text-center">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://secure.php.net/date */
								_x( 'Y', 'copyright date format', 'zeroone' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<p class="powered-by-wordpress text-center">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zeroone' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'zeroone' ); ?>
							</a> |
                            <?php /* !!! Your are not allowed to remove the link to theme.kitchen website (copyright notice) until you buy a domain license. https://theme.kitchen/zeroone !!! */ ?>
                            <a href="<?php echo esc_url( __( 'https://theme.kitchen/wordpress-themes/', 'zeroone' ) ); ?>">
                                <?php _e( '0.1 Energy Saving WordPress Theme', 'zeroone' ); ?>
                            </a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

                    <div class="top-link">
                        <a class="to-the-top" href="#site-header" title="<?php __( 'To the top %s', 'zeroone' ) ?>">
                            <span class="arrow" aria-hidden="true">&uarr;</span>
                        </a><!-- .to-the-top -->
                    </div>
				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
