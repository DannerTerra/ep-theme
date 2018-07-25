<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package parallax-one
 */
?><!DOCTYPE html>
<?php parallax_hook_html_before(); ?>
<html <?php language_attributes(); ?> class="no-js">
<head>
<?php parallax_hook_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<?php parallax_hook_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body itemscope itemtype="http://schema.org/WebPage" <?php body_class(); ?> dir="
																			<?php
																			if ( is_rtl() ) {
																				echo 'rtl';
																			} else {
																				echo 'ltr';}
?>
">
<?php parallax_hook_body_top(); ?>
<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
	<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'parallax-one' ); ?></a>
	<!-- =========================
	 PRE LOADER
	============================== -->
	<?php

	if ( is_front_page() && ! is_customize_preview() && get_option( 'show_on_front' ) != 'page' ) :

		$parallax_one_disable_preloader = get_theme_mod( 'paralax_one_disable_preloader' );

		if ( isset( $parallax_one_disable_preloader ) && ($parallax_one_disable_preloader != 1) ) :

			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';

		endif;

	endif;
	?>


	<!-- =========================
	 SECTION: HOME / HEADER
	============================== -->
	<!--header-->
	<?php parallax_hook_header_before(); ?>
	<?php $ep_page_background = is_single() ? get_the_post_thumbnail_url(get_page_by_path('projetos'), 'full') : get_the_post_thumbnail_url($post->post_parent, 'full'); ?>

	<header itemscope itemtype="http://schema.org/WPHeader" id="masthead" role="banner" data-stellar-background-ratio="0.5" class="header header-style-one site-header <?php echo !is_front_page() ? 'header-page-ep" style="background-image: url(&quot;' . $ep_page_background : '' ?>&quot;);">

	<?php parallax_hook_header_top(); ?>
		<!-- COLOR OVER IMAGE -->
		<?php
			$paralax_one_sticky_header = get_theme_mod( 'paralax_one_sticky_header','parallax-one' );
		if ( isset( $paralax_one_sticky_header ) && ($paralax_one_sticky_header != 1) ) {
			$fixedheader = 'sticky-navigation-open';
		} else {
			if ( ! is_front_page() ) {
				$fixedheader = 'sticky-navigation-open';
			} else {
				$fixedheader = '';
				if ( 'posts' != get_option( 'show_on_front' ) ) {
					if ( isset( $paralax_one_sticky_header ) && ($paralax_one_sticky_header != 1) ) {
						$fixedheader = 'sticky-navigation-open';
					} else {
						$fixedheader = '';
					}
				}
			}
		}
		?>
		<div class="overlay-layer-nav 
		<?php
		if ( ! empty( $fixedheader ) ) {
			echo esc_attr( $fixedheader );}
?>
">

			<!-- STICKY NAVIGATION -->
			<div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation appear-on-scroll">
				<!-- CONTAINER -->
				<div class="container">

					<div class="navbar-header">

						<!-- LOGO -->

						<button title='<?php _e( 'Toggle Menu', 'parallax-one' ); ?>' aria-controls='menu-main-menu' aria-expanded='false' type="button" class="navbar-toggle menu-toggle" id="menu-toggle" data-toggle="collapse" data-target="#menu-primary">
							<span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation','parallax-one' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<?php

							$parallax_one = get_theme_mod( 'paralax_one_logo', parallax_get_file( '/images/logo-nav.png' ) );
							$parallax_one = apply_filters( 'parallax_one_translate_single_string', $parallax_one, 'Header - Logo' );


						if ( ! empty( $parallax_one ) ) :

							echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="navbar-brand col-sm-6 col-md-12" title="' . get_bloginfo( 'title' ) . '">';

							// echo '<img src="' . parallax_one_make_protocol_relative_url( esc_url( $parallax_one ) ) . '" alt="' . get_bloginfo( 'title' ) . '">';
							echo '<img src="' . get_site_url() . '/wp-content/themes/Parallax-One/images/logos/Logo EP barra azul.png' . '" alt="' . get_bloginfo( 'title' ) . '">';

							echo '</a>';


			// Escritoerio de projetos section

							// echo '<a id="sec-logo-top" href="http://epifrs.dev/" class="navbar-brand col-sm-6" title="Escritório de Projetos"><img src="//epifrs.dev/wp-content/themes/Parallax-One/images/logo-nav.png" alt="Escritório de Projetos"></a>';
							echo '<a id="sec-logo-top" href=" <?php echo get_site_url(); ?>" class="navbar-brand col-sm-6" title="Escritório de Projetos"><img src="' . get_site_url() . '/wp-content/themes/Parallax-One/images/logos/Logo IF barra azul.png" alt="Escritório de Projetos"></a>';

			// Escritoerio de projetos section
				

							echo '<div class="header-logo-wrap text-header paralax_one_only_customizer">';

							echo '<h1 itemprop="headline" id="site-title" class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></h1>';

							echo '<p itemprop="description" id="site-description" class="site-description">' . get_bloginfo( 'description' ) . '</p>';

							echo '</div>';

							else :

								if ( is_customize_preview() ) :

									echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="navbar-brand paralax_one_only_customizer" title="' . get_bloginfo( 'title' ) . '">';

										echo '<img src="" alt="' . get_bloginfo( 'title' ) . '">';

									echo '</a>';

								endif;

								echo '<div class="header-logo-wrap text-header">';

									echo '<h1 itemprop="headline" id="site-title" class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></h1>';

									echo '<p itemprop="description" id="site-description" class="site-description">' . get_bloginfo( 'description' ) . '</p>';

								echo '</div>';
							endif;

						?>

					</div>

		<!-- Escritorio de Projetos Section  IFRS Logo -->
					<?php 
					// echo '<a id="sec-logo" href="http://epifrs.dev/" class="navbar-brand ifrs-logo" title="Escritório de Projetos"><img src="//epifrs.dev/wp-content/themes/Parallax-One/images/logo-nav.png" alt="Escritório de Projetos"></a>';
					echo '<a id="sec-logo" href="http://ifrs.edu.br" class="navbar-brand ifrs-logo" title="Escritório de Projetos"><img src="' . get_site_url() . '/wp-content/themes/Parallax-One/images/logos/Logo IF barra azul.png" alt="Escritório de Projetos"></a>';
					?>
		<!--  Escritorio de Projetos Section  IFRS Logo -->

					<!-- MENU -->
					<div itemscope itemtype="http://schema.org/SiteNavigationElement" aria-label="<?php esc_html_e( 'Primary Menu','parallax-one' ); ?>" id="menu-primary" class="navbar-collapse collapse">
						<!-- LOGO ON STICKY NAV BAR -->
						<div id="site-header-menu" class="site-header-menu">
							<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php
								wp_nav_menu(
									array(
										'theme_location'    => 'primary',
										'menu_class'        => 'primary-menu small-text',
										'depth'             => 4,
										'fallback_cb'       => 'parallax_one_wp_page_menu',
									)
								);
							?>
							</nav>
						</div>
					</div>


				</div>
				<!-- /END CONTAINER -->
			</div>
			<!-- /END STICKY NAVIGATION -->
