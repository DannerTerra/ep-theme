<?php $categorias = get_categories(); 
	foreach ($categorias as $cat) {
		# code...
	}

?>


<div class="row portfolio-categorias">

	<div class="col-xs-6 col-sm-2">
		<div class="portfolio-categoria-body">
			<img src="../wp-content/themes/Parallax-One/images/icons/Ícone Desenvolvimento Tecnológico.png" alt="Desenvolvimento Tecnológico">
			<p>Inovações tecnológicas para o setor produtivo</p> 
		</div>
	</div>

	<div class="col-xs-6 col-sm-2">
		<div class="portfolio-categoria-body">
			<img src="../wp-content/themes/Parallax-One/images/icons/Ícone Inovação social e ambiental.png" alt="Desenvolvimento Tecnológico">
			<p>Inovações e tecnologias sociais</p>
		</div>
	</div>

	<div class="col-xs-6 col-sm-2">
		<div class="portfolio-categoria-body">
			<img src="../wp-content/themes/Parallax-One/images/icons/Ícone Capacitação e cursos.png" alt="Desenvolvimento Tecnológico">
			<p>Capacitações e cursos</p>
		</div>		
	</div>

	<div class="col-xs-6 col-sm-2">
		<div class="portfolio-categoria-body">
			<img src="../wp-content/themes/Parallax-One/images/icons/Ícone Habitats de Inovação.png" alt="Desenvolvimento Tecnológico">
			<p>Prestação de serviços e consultoria</p>
		</div>
	</div>

	<div class="col-xs-6 col-sm-2">
		<div class="portfolio-categoria-body">
			<img src="../wp-content/themes/Parallax-One/images/icons/Ícone Laboratórios.png" alt="Desenvolvimento Tecnológico">
			<p>Laboratórios de prestação de serviço</p>
		</div>
	</div>

	<div class="col-xs-6 col-sm-2">
		<div class="portfolio-categoria-body">
			<img src="../wp-content/themes/Parallax-One/images/icons/Ícone Laboratórios.png" alt="Desenvolvimento Tecnológico">
			<p>Laboratórios de prestação de serviço</p>
		</div>
	</div>

</div>
<div class="row portfolio-categorias">
<?php 
	$main_page_id = $post->post_parent ? array_reverse(get_post_ancestors($post->ID)) : $post->ID;
	
	$args = [
		'child_of' => $main_page_id
		//'title_li' => ''
	];

	$paginas = get_pages($args);
	
	foreach ($paginas as $pagina) {
		?>
			<div class="col-xs-6 col-sm-2">
				<a href=" <?php echo get_the_permalink($pagina); ?>">
					<div class="portfolio-categoria-body">
						<img src=" <?php echo get_the_post_thumbnail_url($pagina->ID);  ?>" alt="Desenvolvimento Tecnológico">
						<p><?php echo $pagina->post_title . "biba"; ?> </p> 
					</div>
				</a>
			</div>

		<?php
	}
 ?>
</div>


		<div class="row">
		<?php 
			//wp_reset_query();

			$currentPage = get_query_var('paged');
			$projetos = new WP_Query("post_type=projeto&posts_per_page=6&paged=$currentPage");
			//query_posts("post_type=projeto&posts_per_page=6&paged=$currentPage");
			if($projetos->have_posts()):
				while($projetos->have_posts()): $projetos->the_post();
		?>	

			<div class="col-sm-6 col-md-4">
				<a href="<?php echo get_the_permalink(); ?>">
					<div class="box-portfolio">
						<div class="image">
							<!-- <img src="../wp-content/themes/Parallax-One/images/fundos/1e364.jpg"> -->
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="text">
							<h5 class="header"> <a href="<?php echo get_the_permalink(); ?>"> <?php the_title(); ?></a></h5>
							<p class="box-body"><?php echo get_the_excerpt(); ?></p>
						</div>
					</div>
				</a>
			</div>


		<?php
				endwhile;
			endif;
			wp_reset_postdata();
		 ?>
		</div>
		<?php //the_posts_pagination(); ?>