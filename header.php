<?php
/**
 * Header file for the Zero One WordPress default theme.
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

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group bg-sunrise" role="banner">

            <nav class="primary-menu-wrapper navbar block" aria-label="<?php esc_attr_e( 'Horizontal', 'zeroone' ); ?>" role="navigation">


                    <section class="header-titles navbar-section">

                        <?php
                        // Site title or logo.
                        zeroone_site_logo();

                        // Site description.
                        zeroone_site_description();
                        ?>

                    </section>

                    <section class="navbar-section">

                        <?php
                        if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
                        ?>
                            <ul class="primary-menu reset-list-style">

                                <?php
                                if ( has_nav_menu( 'primary' ) ) {

                                    wp_nav_menu(
                                        array(
                                            'container'  => '',
                                            'items_wrap' => '%3$s',
                                            'theme_location' => 'primary',
                                        )
                                    );

                                } elseif ( ! has_nav_menu( 'expanded' ) ) {

                                    wp_list_pages(
                                        array(
                                            'match_menu_classes' => true,
                                            'show_sub_menu_icons' => true,
                                            'title_li' => false,
                                            'walker'   => new zeroone_Walker_Page(),
                                        )
                                    );

                                }
                                ?>

                            </ul>

                        <?php
					    }
                        ?>

                        <?php

                        // Check whether the header search is activated in the customizer.
                        $enable_header_search = get_theme_mod( 'enable_header_search', true );

                        if ( true === $enable_header_search ) {

                            ?>

                            <button class="toggle search-toggle mobile-search-toggle column" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php zeroone_the_theme_svg( 'search' ); ?>
								</span>
								<span class="toggle-text"><?php _e( 'Search', 'zeroone' ); ?></span>
							</span>
                            </button><!-- .search-toggle -->

                        <?php } ?>

                        <?php
                        // Output the search modal (if it is activated in the customizer).
                        if ( true === $enable_header_search ) {
                            get_template_part( 'template-parts/modal-search' );
                        }
                        ?>
                    </section>

                </div>

				<div class="columns d-hide">

                    <?php
                        // Output the menu modal.
		                // get_template_part( 'template-parts/modal-menu' );
		            ?>

					<button class="toggle nav-toggle mobile-nav-toggle column" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php zeroone_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php _e( 'Menu', 'zeroone' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper column d-hide">

                    <?php
					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e( 'Menu', 'zeroone' ); ?></span>
										<span class="toggle-icon">
											<?php zeroone_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

							<?php
						}

						if ( true === $enable_header_search ) {
							?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<?php zeroone_the_theme_svg( 'search' ); ?>
										<span class="toggle-text"><?php _e( 'Search', 'zeroone' ); ?></span>
									</span>
								</button><!-- .search-toggle -->

							</div>

							<?php
						}
						?>

						</div><!-- .header-toggles -->
						<?php
					}
					?>

            </nav><!-- .primary-menu-wrapper -->

		</header><!-- #site-header -->


