		<div class="row">
			<!-- <div class="col-sm-4">
				<div class="ep-contact-text">
					<h5 class="colored-text ep-contact-page-titulo dark-text">Administração</h5>
					<p class="ep-contact-page">para assuntos referentes a processos,
					contratos, compras e agenda da diretoria
					Fones: (51) XXXXX-XXXX</p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">IFRS</h5>
					<p class="ep-contact-page">para assuntos referentes a processos,
					contratos, compras e agenda da diretoria
					Fones: (51) XXXXX-XXXX</p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Pesquisa e
					Desenvolvimento Tecnológico</h5>
					<p class="ep-contact-page">para assuntos referentes a processos,
					contratos, compras e agenda da diretoria
					Fones: (51) XXXXX-XXXX</p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Projetos Sociais,
					Culturais e Ambientais</h5>
					<p class="ep-contact-page">para assuntos referentes a processos,
					contratos, compras e agenda da diretoria
					Fones: (51) XXXXX-XXXX</p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Cursos e Capacitações</h5>
					<p class="ep-contact-page">para assuntos referentes a processos,
					contratos, compras e agenda da diretoria
					Fones: (51) XXXXX-XXXX</p>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="ep-contact-text">
					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Prestação de Serviços
					e Consultoria</h5>
					<p class="ep-contact-page">para assuntos referentes a processos,
					contratos, compras e agenda da diretoria
					Fones: (51) XXXXX-XXXX</p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Propriedade Intelectual</h5>
					<p class="ep-contact-page">para assuntos referentes a processos,
					contratos, compras e agenda da diretoria
					Fones: (51) XXXXX-XXXX</p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Transferência de Tecnologia</h5>
					<p class="ep-contact-page">para assuntos referentes a processos,
					contratos, compras e agenda da diretoria
					Fones: (51) XXXXX-XXXX</p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Laboratórios</h5>
					<p class="ep-contact-page">para assuntos referentes a processos,
					contratos, compras e agenda da diretoria
					Fones: (51) XXXXX-XXXX</p>
				</div>
				
			</div> -->
			<!-- <div class="col-sm-4">
				<div class="ep-contact-text">
					<h5 class="colored-text ep-contact-page-titulo dark-text">Administração</h5>
					<p class="ep-contact-page"><?php the_field('administracao'); ?></p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">IFRS</h5>
					<p class="ep-contact-page"><?php the_field('ifrs'); ?></p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Pesquisa e
					Desenvolvimento Tecnológico</h5>
					<p class="ep-contact-page"><?php the_field('pesquisa_e_desenvolvimento'); ?></p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Projetos Sociais,
					Culturais e Ambientais</h5>
					<p class="ep-contact-page"><?php the_field('projetos_sociais_culturais_e_ambientais'); ?></p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Cursos e Capacitações</h5>
					<p class="ep-contact-page"><?php the_field('cursos_e_capacitacoes'); ?></p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="ep-contact-text">
					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Prestação de Serviços
					e Consultoria</h5>
					<p class="ep-contact-page"><?php the_field('prestacao_servicos_e_consultoria'); ?></p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Propriedade Intelectual</h5>
					<p class="ep-contact-page"><?php the_field('propriedade_intelectual'); ?></p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Transferência de Tecnologia</h5>
					<p class="ep-contact-page"><?php the_field('transferencia_tecnologia'); ?></p>

					<h5 class="colored-text ep-contact-page-titulo dark-text">Setor de Laboratórios</h5>
					<p class="ep-contact-page"><?php the_field('laboratorios'); ?></p>
				</div>	
			</div> -->

			<div class="col-sm-6">
				<!-- <div class="ep-contact-text"> -->
					<?php the_content(); ?>
				<!-- </div> -->
			</div>

			<div class="col-sm-6 image-email">
				<div class="form-email">
					<h3>Contato</h3>
					<!-- <form class="form-email">
					 <div class="form-group">
					    <input type="text" class="form-control" id="form_nome" placeholder="Nome">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control" id="form_email" aria-describedby="emailHelp" placeholder="E-maill">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <input type="password" class="form-control" id="form_website" placeholder="Website">
					  </div>
					  <div class="form-group">
					    <textarea class="form-control" id="form_mensagem" placeholder="Mensagem" rows="3"></textarea> 
					  </div>
					  <button type="submit" class="btn btn-primary">Enviar</button>
					</form> -->
					<?php echo do_shortcode( '[contact-form-7 id="194" title="Formulário de contato 1"]' ) ?>
				</div>

					<!-- <img src="../wp-content/themes/Parallax-One/images/icons/Fundo E-mail.png"> -->

				<!-- <div class="box-atuacao light-blue">
					<div class="atuacao-body">
						<img src="../wp-content/themes/Parallax-One/images/icons/Ícone branco Habitats_ área de atuação.png" alt="Desenvolvimento Tecnológico">
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
					
				</div> -->
			</div>
			<?php //echo do_shortcode( '[pirate_forms]' ) ?>
			

		</div>
		<?php //echo do_shortcode( '[contact-form-7 id="194" title="Formulário de contato 1"]' ) ?>



<!-- <div role="form" class="wpcf7" id="wpcf7-f194-p45-o1" lang="pt-BR" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/contato/#wpcf7-f194-p45-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="194">
<input type="hidden" name="_wpcf7_version" value="5.0.1">
<input type="hidden" name="_wpcf7_locale" value="pt_BR">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f194-p45-o1">
<input type="hidden" name="_wpcf7_container_post" value="45">
</div> -->


<!-- 
<div role="form" class="wpcf7" id="wpcf7-f194-p45-o1" lang="pt-BR" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/contato/#wpcf7-f194-p45-o1" method="post" class="wpcf7-form" novalidate="novalidate">
	<div style="display: none;">
	<input type="hidden" name="_wpcf7" value="194">
	<input type="hidden" name="_wpcf7_version" value="5.0.1">
	<input type="hidden" name="_wpcf7_locale" value="pt_BR">
	<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f194-p45-o1">
	<input type="hidden" name="_wpcf7_container_post" value="45">
	</div>
	<div class="wpcf7-response-output wpcf7-display-none"></div>
</form>
</div> -->


<!-- 
<label> Seu nome (obrigatório)
    [text* your-name] </label>

<label> Seu e-mail (obrigatório)
    [email* your-email] </label>

<label> Assunto
    [text your-subject] </label>

<label> Sua mensagem
    [textarea your-message] </label>

[submit "Enviar"] -->

<!-- 
<div class="form-group">
<input type="text" name="your-name" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"" id="form_nome" placeholder="Nome">
</div>

<div class="form-group">
<input type="email" name="your-email" id="form_email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail">
</div>

<div class="form-group">
<input name="your-subject" type="text" id="form_assunto" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Assunto">
</div>

<div class="form-group">
<textarea name="your-message" id="form_mensagem" placeholder="Mensagem" rows="3" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea> 
</div>

<button type="submit" class="wpcf7-form-control btn btn-primary">Enviar</button><span class="ajax-loader"></span> -->