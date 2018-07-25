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

if ( ! empty( $parallax_one_our_services_title ) || ! empty( $parallax_one_our_services_subtitle ) || ! parallax_one_general_repeater_is_empty( $parallax_one_services ) ) {
	parallax_hook_services_before(); ?>

      <!-- class="services" -->
	<section class="call-to-action" id="services" role="region" aria-label="<?php esc_attr_e( 'Services', 'parallax-one' ); ?> " style="background-image:url(./wp-content/themes/Parallax-One/images/background-images/parallax-img/parallax-img1.jpg);">
		<?php
		parallax_hook_services_top();
		?>
<!-- 		<div class="section-overlay-layer"> -->





	<!-- EP SECTION  1 -->


<!-- 	<div class="container single-page-ep-section " parallax_onegrid-attr="this-0" data-sr-init="true" data-sr-complete="true">
	    <div class="row section-ep-sp">
		    <!-- <div class="section-body col-md-3 col-l-3 col-xl-3">
		   	<div class="col-sm-3">
		   		teste
		   	</div>			
		    <div class="section-body col-sm-6">
		         <div class="section-head">
		             Como servidores podem participar?
		        </div>

				<hr class="section-separator-left">
				<hr class="section-separator">
				<hr class="section-separator-right">

				<p class="section-text">
						Professores e técnicos do IFRS podem aderir a projetos
						que estão em andamento ou sugerir novos projetos
						em parceria com empresas públicas ou privadas
						e outros tipos de organizações sociais através
					    de convênios ou fundação de apoio.
				</p>

				<div class="row button-section">
			   		<div class="col-md-6">
						<button class="btn btn-primary main-button single-page-ep-section-button">Projetos em andamento</button>
			        </div>
				    <div class="col-md-6">
							<button class="btn btn-primary main-button single-page-ep-section-button">Propor um novo projeto</button>
				    </div>
				</div>
		    </div>

		    <div class="col-sm-3">
		   		teste
		   	</div>	
		</div>
	</div> -->

<div class="section-overlay-layer-ep">
<div class="container single-page-ep-section " parallax_onegrid-attr="this-0" data-sr-init="true" data-sr-complete="true">
	    <div class="row section-ep-sp">
		    <!-- <div class="section-body col-md-3 col-l-3 col-xl-3"> -->
		   	<div class="col-sm-3 side-image">
		   		<img src="./wp-content/themes/Parallax-One/images/side-image/professor.png" class="both-side">
		   	</div>			
		    <div class="section-body col-sm-6">
		         <div class="section-head">
		             Como servidores podem participar?
		        </div>

				<hr class="section-separator-left">
				<hr class="section-separator">
				<hr class="section-separator-right">

				<p class="section-text">
						Professores e técnicos do IFRS podem aderir a projetos
						que estão em andamento ou sugerir novos projetos
						em parceria com empresas públicas ou privadas
						e outros tipos de organizações sociais através
					    de convênios ou fundação de apoio.
				</p>

				<div class="row button-section">
			   		<div class="col-sm-6 col-l-12 ">
						<button class="btn btn-primary main-button single-page-ep-section-button">Projetos em andamento</button>
			        </div>
				    <div class="col-sm-6 col-l-12">
						<button class="btn btn-primary main-button single-page-ep-section-button">Propor um novo projeto</button>
				    </div>
				</div>
		    </div>

		    <div class="col-sm-3 side-image">
		   		<img src="./wp-content/themes/Parallax-One/images/side-image/Professora.png" class="both-side">
		   	</div>	
		</div>
	</div>
</div>
<!-- FIM EP SECTION -->

	


			<div class="container">
				<div class="section-header">
					<?php
					if ( ! empty( $parallax_one_our_services_title ) ) {
					?>
						<h2 class="dark-text"><?php echo wp_kses_post( $parallax_one_our_services_title ); ?></h2>
						<div class="colored-line"></div>
						<?php
					} elseif ( is_customize_preview() ) {
					?>
						<h2 class="dark-text paralax_one_only_customizer"></h2>
						<div class="colored-line paralax_one_only_customizer"></div>
						<?php
					}

					if ( ! empty( $parallax_one_our_services_subtitle ) ) {
					?>
						<div class="sub-heading"><?php echo wp_kses_post( $parallax_one_our_services_subtitle ); ?></div>
						<?php
					} elseif ( is_customize_preview() ) {
					?>
						<div class="sub-heading paralax_one_only_customizer"></div>
						<?php
					}
					?>
				</div>

				<?php
				if ( ! empty( $parallax_one_services ) ) {
					$parallax_one_services_decoded = json_decode( $parallax_one_services );
					?>
					<div id="our_services_wrap2" class="services-wrap 
					<?php
					if ( ! empty( $parallax_one_services_pinterest ) ) {
						echo 'our_services_wrap_piterest';
					}
?>
">
						<?php
						foreach ( $parallax_one_services_decoded as $parallax_one_service_box ) {
							$choice           = ! empty( $parallax_one_service_box->choice ) ? $parallax_one_service_box->choice : '';
							$icon             = ! empty( $parallax_one_service_box->icon_value ) ? apply_filters( 'parallax_one_translate_single_string', $parallax_one_service_box->icon_value, 'Services section' ) : '';
							$image            = ! empty( $parallax_one_service_box->image_url ) ? apply_filters( 'parallax_one_translate_single_string', $parallax_one_service_box->image_url, 'Services section' ) : '';
							$title            = ! empty( $parallax_one_service_box->title ) ? apply_filters( 'parallax_one_translate_single_string', $parallax_one_service_box->title, 'Services section' ) : '';
							$text             = ! empty( $parallax_one_service_box->text ) ? apply_filters( 'parallax_one_translate_single_string', $parallax_one_service_box->text, 'Services section' ) : '';
							$link             = ! empty( $parallax_one_service_box->link ) ? apply_filters( 'parallax_one_translate_single_string', $parallax_one_service_box->link, 'Services section' ) : '';
							$section_is_empty = ( empty( $icon ) || $icon === 'No Icon' && $choice === 'parallax_icon' ) && ( empty( $image ) && $choice === 'parallax_image' ) && empty( $title ) && empty( $text );

							if ( ! $section_is_empty ) {
							?>
								<div class="service-box"
									<?php
									if ( ! empty( $parallax_one_frontpage_animations ) && ( (bool) $parallax_one_frontpage_animations === true ) ) {
										echo 'data-scrollreveal="enter left after 0.15s over 1s"';
									}
?>
>
									<?php
									parallax_hook_services_entry_before();
									?>
									<div class="single-service border-bottom-hover">
										<?php
										parallax_hook_services_entry_top();
										if ( ! empty( $choice ) && $choice !== 'parallax_none' ) {

											if ( $choice === 'parallax_icon' ) {
												if ( ! empty( $icon ) ) {
													if ( ! empty( $link ) ) {
													?>
														<div class="service-icon colored-text">
															<a href="<?php echo esc_url( $link ); ?>">
																<span class="fa <?php echo esc_attr( $icon ); ?>"></span>
															</a>
														</div>
														<?php
													} else {
													?>
														<div class="service-icon colored-text">
															<span class="fa <?php echo esc_attr( $icon ); ?>"></span>
														</div>
														<?php
													}
												}
											}

											if ( $choice === 'parallax_image' ) {
												if ( ! empty( $image ) ) {
													if ( ! empty( $link ) ) {
													?>
														<a href="<?php echo parallax_one_make_protocol_relative_url( esc_url( $link ) ); ?>">
															<img src="<?php echo esc_url( $image ); ?>" <?php echo( ! empty( $title ) ? 'alt="' . esc_attr( $title ) . '"' : '' ); ?> />
														</a>
														<?php
													} else {
													?>
														<img src="<?php echo esc_url( $image ); ?>" <?php echo( ! empty( $title ) ? 'alt="' . esc_attr( $title ) . '"' : '' ); ?> />
														<?php
													}
												}
											}
										}

										if ( ! empty( $title ) ) {
											if ( ! empty( $link ) ) {
											?>
												<h3 class="colored-text">
													<a href="<?php echo esc_url( $link ); ?>"><?php echo wp_kses_post( $title ); ?></a>
												</h3>
												<?php
											} else {
											?>
												<h3 class="colored-text"><?php echo wp_kses_post( $title ); ?></h3>
												<?php
											}
										}

										if ( ! empty( $text ) ) {
										?>
											<p><?php echo html_entity_decode( $text ); ?></p>
											<?php
										}
										parallax_hook_services_entry_bottom();
										?>
									</div>
									<?php
									parallax_hook_services_entry_after();
									?>
								</div>
								<?php
							} // End if().
						} // End foreach().
						?>
					</div>
					<?php
				} // End if().
				?>
			</div>
		</div>
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

<section class="call-to-action" id="services" role="region" aria-label="<?php esc_attr_e( 'Services', 'parallax-one' ); ?> " style="background-image:url(./wp-content/themes/Parallax-One/images/fundos/temp.jpg);">
		<?php
		parallax_hook_services_top();
		?>

				<!-- EP SECTION  2 -->

		<div class="section-overlay-layer-ep">
		<div class="container single-page-ep-section " parallax_onegrid-attr="this-0" data-sr-init="true" data-sr-complete="true">
			    <div class="row section-ep-sp">
					

				    <div class="section-body secdark-blue col-sm-6">
				         <div class="section-head">
				             Empresas, organizações sociais e governamentais
				        </div>

						<hr class="section-separator-left">
						<hr class="section-separator">
						<hr class="section-separator-right">

						<p class="section-text">
							<ul class="section-text" style="text-align: left;padding-left: 100px;">
								<li>Projetos de Desenvolvimento Tecnológico</li>
								<li>Projetos Sociais</li>
								<li>Projetos na Área Educacional</li>
								<li>Capacitações e Consultorias</li>
							</ul>
						</p>

						<div class="row button-section">
					   		<div class="col-sm-6 col-l-12 ">
								<button class="btn btn-primary main-button single-page-ep-section-button bluebut">Projetos em andamento</button>
					        </div>
						    <div class="col-sm-6 col-l-12">
								<button class="btn btn-primary main-button single-page-ep-section-button bluebut">Propor um novo projeto</button>
						    </div>
						</div>
				    </div>

				    <div class="col-sm-6 side-image">
				    	<img src="./wp-content/themes/Parallax-One/images/side-image/meeting.jpg" class="side">
					</div>

				</div>
			</div>
		</div>

		<!-- FIM EP SECTION -->

		</section>


		<section class="call-to-action" id="services" role="region" aria-label="<?php esc_attr_e( 'Services', 'parallax-one' ); ?> " style="background-image:url(./wp-content/themes/Parallax-One/images/background-images/parallax-img/parallax-img1.jpg);">
		<?php
		parallax_hook_services_top();
		?>

		<!-- EP SECTION  3 -->

<div class="section-overlay-layer-ep">
<div class="container single-page-ep-section " parallax_onegrid-attr="this-0" data-sr-init="true" data-sr-complete="true">
	    <div class="row section-ep-sp">
			
			<div class="col-sm-6 side-image">
				<img src="./wp-content/themes/Parallax-One/images/side-image/youth.jpg" class="side">
			</div>

		    <div class="section-body secblue col-sm-6">
		         <div class="section-head">
		             Sou estudante e quero participar!
		        </div>

				<hr class="section-separator-left">
				<hr class="section-separator">
				<hr class="section-separator-right">

				<p class="section-text">
						Participe dos projetos em andamento
						ou faça parte de novos projetos.
						Clique em "Quero Participar!" e preencha o formulário com
						informações sobre seu perfil e seus interesses. Assim, podemos
						auxiliá-lo a identificar um projeto adequado às suas expectativas.
						Você também pode conhecer os projetos em andamento
						e indicar interesse em participar de algum.
				</p>

				<div class="row button-section">
			   		<div class="col-sm-6 col-l-12 ">
						<button class="btn btn-primary main-button single-page-ep-section-button">Projetos em andamento</button>
			        </div>
				    <div class="col-sm-6 col-l-12">
						<button class="btn btn-primary main-button single-page-ep-section-button">Propor um novo projeto</button>
				    </div>
				</div>
		    </div>

		</div>
	</div>
</div>

<!-- FIM EP SECTION -->
</section>





		<section class="call-to-action" id="services" role="region" aria-label="<?php esc_attr_e( 'Services', 'parallax-one' ); ?> " style="background-image:url(./wp-content/themes/Parallax-One/images/background-images/parallax-img/parallax-img1.jpg);">
		<?php
		parallax_hook_services_top();
		?>
<!-- EP PAGE AREA ATUACAO-->

<div class="container">
				<div class="section-header">

						<h2 class="dark-text">Áreas de Atuação</h2>
						<hr class="section-separator-left">
						<hr class="section-separator">
						<hr class="section-separator-right">


						<div class="sub-heading">Conheça o conjunto de recursos que o Escrtório de Projetos do IFRS dispõe.</div>

				</div>

				<?php
				if ( ! empty( $parallax_one_services ) ) {
					$parallax_one_services_decoded = json_decode( $parallax_one_services );
					?>
					<div id="our_services_wrap" class="services-wrap 
					<?php
					if ( ! empty( $parallax_one_services_pinterest ) ) {
						echo 'our_services_wrap_piterest';
					}
?>
">
						<?php
						// echo '<pre>';
						// var_dump($parallax_one_services_decoded);
						// die();
						$parallax_one_services_decoded = [];
						$parallax_one_services_decoded = [ 
							['choice' => 'parallax_image',
							 'icon_value' => 'No Icon',
							 'image_url' => './wp-content/themes/Parallax-One/images/icons/Ícone Desenvolvimento Tecnológico.png',
							 'title' => 'test',
							 'text' => 'test',
							 'link' => 'google.com',
							 'id' => 'parallax_one_56fd4d93f3012'
							]
						];

						// echo '<pre>';
						// var_dump($parallax_one_services_decoded);
						// die();

						foreach ( $parallax_one_services_decoded as $parallax_one_service_box ) {
							$choice           = ! empty( $parallax_one_service_box->choice ) ? $parallax_one_service_box->choice : '';
							$icon             = ! empty( $parallax_one_service_box->icon_value ) ? $parallax_one_service_box->icon_value : '';
							$image            = ! empty( $parallax_one_service_box->image_url ) ? $parallax_one_service_box->image_url : '';
							$title            = ! empty( $parallax_one_service_box->title ) ? $parallax_one_service_box->title : '';
							$text             = ! empty( $parallax_one_service_box->text ) ? $parallax_one_service_box->text : '';
							$link             = ! empty( $parallax_one_service_box->link ) ? $parallax_one_service_box->link : '';
							$section_is_empty = ( empty( $icon ) || $icon === 'No Icon' && $choice === 'parallax_icon' ) && ( empty( $image ) && $choice === 'parallax_image' ) && empty( $title ) && empty( $text );

							if ( ! $section_is_empty ) {
							?>
								<div class="service-box"
									<?php
									if ( ! empty( $parallax_one_frontpage_animations ) && ( (bool) $parallax_one_frontpage_animations === true ) ) {
										//echo 'data-scrollreveal="enter left after 0.15s over 1s"';
									}
?>
>
									<?php
									parallax_hook_services_entry_before();
									?>
										<?php
										parallax_hook_services_entry_top();
										// $choice = 'parallax_image';
										// $link = 'http://google.com';
?>
														<a href="<?php echo  $link; ?>">
															<img src="<?php echo $image; ?>" <?php echo( ! empty( $title ) ? 'alt="' . esc_attr( $title ) . '"' : '' ); ?> />
														</a>


												<h3 class="colored-text">
													<a href="<?php echo esc_url( $link ); ?>"><?php echo wp_kses_post( $title ); ?></a>
												</h3>

											<p><?php echo html_entity_decode( $text ); ?></p>
											<?php
										parallax_hook_services_entry_bottom();
										?>
									</div>
									<?php
									parallax_hook_services_entry_after();
									?>
								</div>
								<?php
							} // End if().
						} // End foreach().
						?>
					</div>
					<?php
				} // End if().
				?>
			</div>
		</div>
		<?php parallax_hook_services_bottom(); ?>

<!-- FIM EP SECTION -->
</section>


<section class="call-to-action" id="services" role="region" aria-label="<?php esc_attr_e( 'Services', 'parallax-one' ); ?> " style="background-image:url(./wp-content/themes/Parallax-One/images/background-images/parallax-img/parallax-img1.jpg);">
<?php
parallax_hook_services_top();
?>

	<div id="our_services_wrap2" class="services-wrap our_services_wrap_piterest parallax_one_grid parallax_one_grid_j9IxTQWkPd">
		<div class="parallax_one_grid_col_3 parallax_one_grid_column_1 parallax_one_grid_first ">
			<div class="service-box" data-scrollreveal="enter right after 0.05s over 1s" parallax_onegrid-attr="this-0" data-sr-init="true" data-sr-complete="true">
				<div class="single-service border-bottom-hover">
					<div class="service-icon colored-text">
						<span class="fa icon-basic-webpage-multiple"></span>
					</div>
					<h3 class="colored-text">Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.</p>
				</div>
			</div>
		</div>
	</div>


</section>

<section class="call-to-action" id="services" role="region" aria-label="<?php esc_attr_e( 'Services', 'parallax-one' ); ?> " style="background-image:url(./wp-content/themes/Parallax-One/images/background-images/parallax-img/parallax-img1.jpg);">
<?php
parallax_hook_services_top();
?>
	<div class="container atuacao-ep-section">
		<div class="section-header">
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box-atuacao orange">
					<div class="atuacao-body">
						<img src="./wp-content/themes/Parallax-One/images/icons/Ícone branco Desenvolvimento tecnológico_ área de atuação.png" alt="Desenvolvimento Tecnológico">
					</div>
					<div class="atuacao-box-head">
				            DESENVOLVIMENTO TECNOLÓGICO
			        </div>

					<p class="atuacao-text">
							Projetos de pesquisa
							aplicada em diversas áreas
							utilizando pesquisadores
							e a estrutura da rede de
							laboratórios do IFRS
					</p>

					<a class="atuacao-link" href="#">Saiba mais</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box-atuacao dark-orange">
					<div class="atuacao-body">
						<img src="./wp-content/themes/Parallax-One/images/icons/Ícone branco Inovações sociais e ambientais_ área de atuação.png" alt="Desenvolvimento Tecnológico">
					</div>
					<div class="atuacao-box-head">
				            INOVAÇÕES SOCIAIS E AMBIENTAIS
			        </div>

					<p class="atuacao-text">
							Projetos que envolvem
							temas como
							cooperativismos, economia
							solidária, inclusão social
							e outros tipos de projetos
							inovadores de impacto social
					</p>

					<a class="atuacao-link" href="#">Saiba mais</a>
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box-atuacao blue">
					<div class="atuacao-body">
						<img src="./wp-content/themes/Parallax-One/images/icons/Ícone branco Capacitação e cursos_ área de atuação.png" alt="Desenvolvimento Tecnológico">
					</div>
					<div class="atuacao-box-head">
				            CAPACITAÇÕES E CURSOS
			        </div>

					<p class="atuacao-text">
							Cursos de curta e média
							duração, tanto presencial
							como por EAD, para
							qualificação em diversas
							áreas das organizações
							públicas e privadas
					</p>

					<a class="atuacao-link" href="#">Saiba mais</a>
					
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box-atuacao light-blue">
					<div class="atuacao-body">
						<img src="./wp-content/themes/Parallax-One/images/icons/Ícone branco Habitats_ área de atuação.png" alt="Desenvolvimento Tecnológico">
					</div>
					<div class="atuacao-box-head">
				            PRESTAÇÃO DE SERVIÇOS E CONSULTORIA
			        </div>

					<p class="atuacao-text">
							Prestação de serviços
							através de diversos
							laboratórios disponíveis
							no IFRS, assim como
							consultoria em diversas
							áreas do conhecimento
					</p>

					<a class="atuacao-link" href="#">Saiba mais</a>
					
				</div>
			</div>
		</div>
	</div>
</section>