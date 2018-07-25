		<div class="row atuacao-ep-section">
		<?php 
			$args = [
				'post_type' => 'acoes',
				'posts_per_page' => 6
			];
			$acoes = new WP_Query($args);
			//query_posts("post_type=projeto&posts_per_page=6&paged=$currentPage");
			if($acoes->have_posts()):
				while($acoes->have_posts()): $acoes->the_post();
		?>	

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box-atuacao" style="background-color:<?php the_field('cor'); ?>">
					<div class="atuacao-body">
						<!-- <img src="../wp-content/themes/Parallax-One/images/icons/Ícone branco Desenvolvimento tecnológico_ área de atuação.png" alt="Desenvolvimento Tecnológico"> -->
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="atuacao-box-head">
				            <?php echo get_the_title(); ?>
			        </div>

					<p class="atuacao-text">
							<?php echo get_the_content(); ?>
					</p>

					<a class="atuacao-link" href="<?php echo the_field('link'); ?>">Saiba mais</a>
				</div>
			</div>
			<?php 
				endwhile;
			endif;
			wp_reset_postdata();
			 ?>

			<!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box-atuacao dark-orange">
					<div class="atuacao-body">
						<img src="../wp-content/themes/Parallax-One/images/icons/Ícone branco Inovações sociais e ambientais_ área de atuação.png" alt="Desenvolvimento Tecnológico">
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
						<img src="../wp-content/themes/Parallax-One/images/icons/Ícone branco Capacitação e cursos_ área de atuação.png" alt="Desenvolvimento Tecnológico">
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
					
				</div>
			</div> -->
		</div>

<!-- 		<div class="row atuacao-ep-section">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box-atuacao orange">
					<div class="atuacao-body">
						<img src="../wp-content/themes/Parallax-One/images/icons/Ícone branco Desenvolvimento tecnológico_ área de atuação.png" alt="Desenvolvimento Tecnológico">
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
						<img src="../wp-content/themes/Parallax-One/images/icons/Ícone branco Inovações sociais e ambientais_ área de atuação.png" alt="Desenvolvimento Tecnológico">
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
						<img src="../wp-content/themes/Parallax-One/images/icons/Ícone branco Capacitação e cursos_ área de atuação.png" alt="Desenvolvimento Tecnológico">
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
					
				</div>
			</div>
		</div> -->