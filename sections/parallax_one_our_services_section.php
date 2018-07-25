<?php
/**
 * SECTION: SERVICES
 *
 * @package parallax-one
 */

$parallax_one_our_services_title    = get_theme_mod( 'parallax_one_our_services_title', esc_html__( 'Our Services', 'parallax-one' ) );
$parallax_one_our_services_title    = apply_filters( 'parallax_one_translate_single_string', $parallax_one_our_services_title, 'Our Services Section' );

$parallax_one_our_services_subtitle = get_theme_mod( 'parallax_one_our_services_subtitle', esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'parallax-one' ) );
$parallax_one_our_services_subtitle = apply_filters( 'parallax_one_translate_single_string', $parallax_one_our_services_subtitle, 'Our Services Section' );

$default                            = parallax_one_services_get_default_content();
$parallax_one_services              = get_theme_mod( 'parallax_one_services_content', $default );
$parallax_one_services_pinterest    = get_theme_mod( 'paralax_one_services_pinterest_style', '5' );
$parallax_one_frontpage_animations  = get_theme_mod( 'parallax_one_enable_animations', false );

// Get the customFields
$queryargs = [
				'post_type' => 'page',
				'pagename' => 'home'
			];
$projetos = new WP_Query($queryargs);
//query_posts("post_type=projeto&posts_per_page=6&paged=$currentPage");
if($projetos->have_posts()):
	while($projetos->have_posts()): $projetos->the_post();

	if ( ! empty( $parallax_one_our_services_title ) || ! empty( $parallax_one_our_services_subtitle ) || ! parallax_one_general_repeater_is_empty( $parallax_one_services ) ) {
		parallax_hook_services_before(); 
?>

      <!-- class="services" -->
	<section class="call-to-action" id="servidores" role="region" aria-label="<?php esc_attr_e( 'Services', 'parallax-one' ); ?> " style="background-image:url(./wp-content/themes/Parallax-One/images/background-images/parallax-img/parallax-img1.jpg);">
		<?php
		parallax_hook_services_top();
		?>

		<div class="section-overlay-layer-ep">
			<div class="container single-page-ep-section " parallax_onegrid-attr="this-0" data-sr-init="true" data-sr-complete="true">
		    <div class="row section-ep-sp">
			    <!-- <div class="section-body col-md-3 col-l-3 col-xl-3"> -->
			   	<div class="col-sm-3 side-image">
			   		<!-- <img src="./wp-content/themes/Parallax-One/images/side-image/professor.png" class="both-side"> -->
			   		<img src="<?php 
				    				if($image = get_field('imagem_esquerda_servidores')) 
				    					echo $image['sizes']['ep-side-call']; 
					?>" class="both-side">

			   	</div>			
			    <div class="section-body col-sm-6">
			         <div class="section-head">
			            <?php the_field('titulo_servidores'); ?> <!-- Como servidores podem participar? -->
			        </div>

					<hr class="section-separator-left">
					<hr class="section-separator">
					<hr class="section-separator-right">

					<p class="section-text">
							<?php the_field('texto_servidores'); ?> 
							<!-- Professores e técnicos do IFRS podem aderir a projetos
							que estão em andamento ou sugerir novos projetos
							em parceria com empresas públicas ou privadas
							e outros tipos de organizações sociais através
						    de convênios ou fundação de apoio. -->
					</p>

					<div class="row button-section">
				   		<div class="col-sm-6 col-l-12 ">
							<button type="button" onclick="location.href='<?php echo home_url( '/projetos/' ) ?>'" class="btn btn-primary main-button single-page-ep-section-button">Projetos em andamento</button>
				        </div>
					    <div class="col-sm-6 col-l-12">
							<button type="button" onclick="location.href='<?php echo home_url( '/contato/' ) ?>'" class="btn btn-primary main-button single-page-ep-section-button">Propor um novo projeto</button>
					    </div>
					</div>
			    </div>

			    <div class="col-sm-3 side-image">
			   		<!-- <img src="./wp-content/themes/Parallax-One/images/side-image/Professora.png" class="both-side"> -->
			   		<img src="<?php 
				    				if($image = get_field('imagem_direita_servidores')) 
				    					echo $image['sizes']['ep-side-call']; 
					?>" class="both-side">
			   		
			   	</div>	
			</div>
		</div>
	</div>
<!-- FIM EP SECTION -->

	


			
		<?php parallax_hook_services_bottom(); ?>
	</section>
	<?php parallax_hook_services_after(); ?>
	<?php
} else {
	if ( is_customize_preview() ) {
		parallax_hook_services_before();
		?>
		<section class="services paralax_one_only_customizer" id="services" role="region" aria-label="<?php esc_html_e( 'Services', 'parallax-one' ); ?>">
			<?php parallax_hook_services_top(); ?>
			<div class="section-overlay-layer">
				<div class="container">
					<div class="section-header">
						<h2 class="dark-text paralax_one_only_customizer"></h2>
						<div class="colored-line paralax_one_only_customizer"></div>
						<div class="sub-heading paralax_one_only_customizer"></div>
					</div>
				</div>
			<!-- </div> -->
			<?php parallax_hook_services_bottom(); ?>
		</section>



		<?php parallax_hook_services_after();
	} // End if().
}  // End if(). ?>




<?php
	$section = apply_filters( 'parallax_one_plus_sections_filter','sections/parallax_one_logos_section' );
	if ( ! empty($section) ) parallax_one_get_template_part( $section );
?>



<!-- <div class="clients white-bg" id="clients" role="region" aria-label=" Affiliates Logos">
	<div class="container">
		<ul class="client-logos" data-scrollreveal="enter top over 1.5s after 1s" data-sr-init="true" data-sr-complete="true">
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/1.png" alt="Logotipo">
				</a>
			</li>
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/2.png" alt="Logotipo">
				</a>
			</li>
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/3.png" alt="Logotipo">
				</a>
			</li>
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/4.png" alt="Logotipo">
				</a>
			</li>
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/5.png" alt="Logotipo">
				</a>
			</li>
		</ul>
	</div>
</div> -->










<section class="call-to-action" id="empresas" role="region" aria-label="<?php esc_attr_e( 'Services', 'parallax-one' ); ?> " style="background-image:url(./wp-content/themes/Parallax-One/images/fundos/temp.jpg);">
		<?php
		parallax_hook_services_top();
		?>

				<!-- EP SECTION  2 -->

		<div class="section-overlay-layer-ep">
		<div class="container single-page-ep-section " parallax_onegrid-attr="this-0" data-sr-init="true" data-sr-complete="true">
			    <div class="row section-ep-sp">
					

				    <div class="section-body secdark-blue col-sm-6">
				         <div class="section-head">
				         	<?php the_field('titulo_empresas'); ?> 
				             <!-- Organizações Públicas e Privadas -->
				        </div>

						<hr class="section-separator-left">
						<hr class="section-separator">
						<hr class="section-separator-right">

						<p class="section-text">
							<ul class="section-text" style="text-align: left; padding-left: 25%;">
								<?php the_field('texto_empresas'); ?> 
								<!-- <li>Inovações Tecnológicas para o Setor Produtivo</li>
								<li>Inovações e Tecnologias Sociais</li>
								<li>Inovações Pedagógicas e Projetos Culturais</li> -->
								<!-- <li>Projetos Sociais e Ambientais</li>
								<li>Projetos na Área Educacional</li> -->
								<!-- <li>Capacitações e Cursos</li>
								<li>Prestação de Serviços e Consultorias</li> -->
							</ul>
						</p>

						<div class="row button-section">
					   		<div class="col-sm-6 col-l-12 ">
								<button type="button" onclick="location.href='<?php echo home_url( '/o-que-fazemos/' ) ?>'" class="btn btn-primary main-button single-page-ep-section-button bluebut">Portifólio de Competências</button>
					        </div>
						    <div class="col-sm-6 col-l-12">
								<button type="button" onclick="location.href='<?php echo home_url( '/contato/' ) ?>'" class="btn btn-primary main-button single-page-ep-section-button bluebut">Contate um consultor técnico</button>
						    </div>
						</div>
				    </div>

				    <div class="col-sm-6 side-image">
				    	<!-- <img src="./wp-content/themes/Parallax-One/images/side-image/meeting.jpg" class="side"> -->
				    	<img src="<?php 
				    				if($image = get_field('imagem_empresas')) 
				    					echo $image['sizes']['ep-side-call']; 
						?>" class="side">
					</div>

				</div>
			</div>
		</div>

		<!-- FIM EP SECTION -->

		</section>

<?php
	$section = apply_filters( 'parallax_one_plus_sections_filter','sections/parallax_one_logos_section' );
	if ( ! empty($section) ) parallax_one_get_template_part( $section );
?>
<!-- 

<div class="clients white-bg" id="clients" role="region" aria-label=" Affiliates Logos">
	<div class="container">
		<ul class="client-logos" data-scrollreveal="enter top over 1.5s after 1s" data-sr-init="true" data-sr-complete="true">
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/1.png" alt="Logotipo">
				</a>
			</li>
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/2.png" alt="Logotipo">
				</a>
			</li>
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/3.png" alt="Logotipo">
				</a>
			</li>
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/4.png" alt="Logotipo">
				</a>
			</li>
			<li>
				<a href="#" title="">
					<img src="//epifrs.test/wp-content/themes/Parallax-One/images/companies/5.png" alt="Logotipo">
				</a>
			</li>
		</ul>
	</div>
</div>
 -->





		<section class="call-to-action" id="estudantes" role="region" aria-label="<?php esc_attr_e( 'Services', 'parallax-one' ); ?> " style="background-image:url(./wp-content/themes/Parallax-One/images/background-images/parallax-img/parallax-img1.jpg);">
		<?php
		parallax_hook_services_top();
		?>

		<!-- EP SECTION  3 -->

<div class="section-overlay-layer-ep">
<div class="container single-page-ep-section " parallax_onegrid-attr="this-0" data-sr-init="true" data-sr-complete="true">
	    <div class="row section-ep-sp">
			
			<div class="col-sm-6 side-image">
				<!-- <img src="./wp-content/themes/Parallax-One/images/side-image/youth.jpg" class="side"> -->
				<img src="<?php 
				    				if($image = get_field('imagem_estudantes')) 
				    					echo $image['sizes']['ep-side-call']; 
				?>" class="side">
				
			</div>

		    <div class="section-body secblue col-sm-6">
		         <div class="section-head">
		         	<?php the_field('titulo_estudantes'); ?> 
		             <!-- Sou estudante e quero participar! -->
		        </div>

				<hr class="section-separator-left">
				<hr class="section-separator">
				<hr class="section-separator-right">

				<?php the_field('texto_estudantes'); ?> 
				<!-- <p class="section-text short-p">
					Participe dos projetos em andamento
					ou faça parte de novos projetos.
				</p>
				<p class="section-text closer">
					Clique em "Quero Participar!" e preencha o formulário com
					informações sobre seu perfil e seus interesses. Assim, podemos
					auxiliá-lo a identificar um projeto adequado às suas expectativas.
				</p>
				<p class="section-text closer">
					Você também pode conhecer os projetos em andamento
					e indicar interesse em participar de algum.
				</p> -->

				<?php 
						endwhile;
					endif;
					wp_reset_postdata();
				 ?>
				<div class="row button-section">
			   		<div class="col-sm-6 col-l-12 ">
						<button type="button" onclick="location.href='<?php echo home_url( '/projetos/' ) ?>'" class="btn btn-primary main-button single-page-ep-section-button">Projetos em andamento</button>
			        </div>
				    <div class="col-sm-6 col-l-12">
						<button type="button" onclick="location.href='<?php echo home_url( '/contato/' ) ?>'" class="btn btn-primary main-button single-page-ep-section-button">Tenho uma ideia!</button>
				    </div>
				</div>
		    </div>

		</div>
	</div>
</div>

<!-- FIM EP SECTION -->
</section>



