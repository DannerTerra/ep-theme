<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package parallax-one
 */
$paralax_one_full_width_template = get_theme_mod( 'paralax_one_full_width_template' );
// var_dump($paralax_one_full_width_template );
// die();
if ( isset( $paralax_one_full_width_template ) && $paralax_one_full_width_template != 1 ) {
	get_header();
		$titulo = get_the_title();
		switch ($titulo) {
			case 'O que Fazemos':
				$ep_page_background = get_site_url() . "/wp-content/themes/Parallax-One/images/fundos/4.jpg";
				$ep_conteudo_section = "sections/ep_fazemos_section.php";
				$titulo = "Áreas de Atuação";
				break;
			case 'Quem Somos':
				$ep_page_background = get_site_url() . "/wp-content/themes/Parallax-One/images/fundos/startup_people-1440x564_c.jpg";
				$ep_conteudo_section = "sections/ep_quem_somos_section.php";
				$titulo = "Conheça Quem Somos!";
				break;
			case 'Parceiros':
				$ep_page_background = get_site_url() . "/wp-content/themes/Parallax-One/images/fundos/12c18de97.jpg";
				$ep_conteudo_section = "sections/ep_parceiros_section.php";
				break;
			case 'Contato':
				$ep_page_background = get_site_url() . "/wp-content/themes/Parallax-One/images/fundos/OFICINA.jpg";
				$ep_conteudo_section = "sections/ep_contato_section.php";
				$titulo = "Entre em Contato";
				break;
			case 'Nossa Equipe':
				$ep_page_background = get_site_url() . "/wp-content/themes/Parallax-One/images/fundos/987.jpg";
				$ep_conteudo_section = "sections/ep_equipe_section.php";
				break;
			case 'Portfolio':
				$ep_page_background = get_site_url() . "/wp-content/themes/Parallax-One/images/fundos/607.jpg";
				$ep_conteudo_section = "sections/ep_projetos_section.php";
				$titulo = "Portfolio do EP";
				break;
			default:
				$ep_page_background = get_site_url() . "/wp-content/themes/Parallax-One/images/fundos/fundo_principal.jpeg";
				$ep_conteudo_section = "sections/ep_notfound_section.php";
				$titulo = "Esta página não existe!";
				break;
		}
		

	 ?>

		<!-- COLOR OVER IMAGE -->
	 	<!-- <div class="overlay-layer-nav 
	 	sticky-navigation-open header-page-ep" style="min-height: 800px;"> -->

				<ul id="parallax_move" style="width: 2040px; margin-left: -60px; margin-top: -60px; position: absolute; transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
					<li class="layer layer1" data-depth="0.10" style="background-image: url(&quot;<?php echo $ep_page_background; ?>&quot;); height: 959px; transform: translate3d(14.79px, -6.37251px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></li>
				</ul>
		</div>
		</div>
			<!-- /END COLOR OVER IMAGE -->
		<?php parallax_hook_header_bottom(); ?>
	</header>
	<!-- /END HOME / HEADER  -->
	<?php parallax_hook_header_after(); ?>

	<?php parallax_hook_content_before(); ?>
	<div id="content" class="content-warp ep-page-back">
		<?php parallax_hook_content_top(); ?>
		<div class="container">
			<div id="primary" class="content-area col-md-12">


				<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">

				<?php parallax_hook_page_before(); ?>

					<div class="section-header-page">

							<h2 class="dark-text ep-header-page"><?php echo $titulo ?></h2>
							<hr class="section-separator-left azul-claro">
							<hr class="section-separator azul-claro">
							<hr class="section-separator-right azul-claro">

					</div>


				<?php include($ep_conteudo_section); ?>

			</div><!-- #primary -->
		</div>
		<?php parallax_hook_content_bottom(); ?>
	</div><!-- .content-wrap -->
	<?php parallax_hook_content_after(); ?>
	<?php get_footer(); ?>
	<?php
} else {
	include( 'template-fullwidth.php' );
}// End if().
