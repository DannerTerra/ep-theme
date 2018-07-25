<?php
/**
 * Template Name: Página - Escritório de Projetos
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

if ( isset( $paralax_one_full_width_template ) && $paralax_one_full_width_template != 1 ) {

	// $ep_page_background = get_site_url() . "/wp-content/themes/Parallax-One/images/fundos/fundo_principal.jpeg";
	// $ep_conteudo_section = "sections/ep_notfound_section.php";
	// $titulo = "Esta página não existe!";

	// $ep_page_background = get_the_post_thumbnail_url($post->post_parent);// get_site_url() . "/wp-content/themes/Parallax-One/images/fundos/fundo_principal.jpeg";
	//$ep_conteudo_section = the_content(); //"sections/ep_notfound_section.php";
	$titulo = get_the_title($post->post_parent); //"Esta página não existe!";
	get_header();
	
	 ?>

		<!-- COLOR OVER IMAGE -->
	 	<!-- <div class="overlay-layer-nav sticky-navigation-open header-page-ep" style="min-height: 800px;">
				<div class="ep-page-image" style="background-image: url(&quot;<?php //echo $ep_page_background; ?>&quot;);">
					
				</div>
			</div>
		</div> -->
			<!-- /END COLOR OVER IMAGE -->
		<?php parallax_hook_header_bottom(); ?>
	</header>
	<!-- /END HOME / HEADER  -->
	<?php parallax_hook_header_after(); ?>

	<?php parallax_hook_content_before(); ?>
	<div id="content" class="content-wrap ep-page-back">
		<?php parallax_hook_content_top(); ?>
		<div class="container">
			<div id="primary" class="content-area col-md-12">


				<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">

				<?php parallax_hook_page_before(); ?>
					<?php  
						while ( have_posts() ) :
						the_post();
					?>
					<div class="section-header-page">

							<h2 class="dark-text ep-header-page"><?php echo $titulo ?></h2>
							<hr class="section-separator-left azul-claro">
							<hr class="section-separator azul-claro">
							<hr class="section-separator-right azul-claro">

					</div>


				<?php 
					// include($ep_conteudo_section); 
					get_template_part( 'content', 'page' );
				?>


				<?php endwhile; ?>
				<?php parallax_hook_page_after(); ?>

				</main><!-- #main -->
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
