<?php $categorias = get_categories(); 
	foreach ($categorias as $cat) {
		# code...
	}

?>

<div class="row portfolio-categorias">
<?php 
	//var_dump( array_reverse(get_post_ancestors($post->ID)));
	//die();
	$main_page_id = $post->post_parent ? array_reverse(get_post_ancestors($post->ID))[0] : $post->ID;
	$args = [
		'child_of' => $main_page_id
		//'title_li' => ''
	];
	// 	$args2 = [
	// 	'child_of' => $main_page_id,
	// 	'title_li' => '',
	// 	'echo' => 0
	// ];

	$paginas = get_pages($args);
	//var_dump($paginas);
	// echo '<pre>';
	// $pages_list = wp_list_pages($args2);
	//echo esc_html($pages_list);
	// $classes_httml = preg_split('/([c][l][a][s][s][=]["]*[a-z_ -\d]*")/',$pages_list);
	// $classes_httml = preg_split('/([c][l][a][a-z]+[=]["_a-z- \d]+)/',$pages_list);


	// foreach ($classes_httml as $key => $value) {
	// 	//echo esc_html($key);
	// 	echo esc_html($value);
	// }
	// 	echo '</pre>';
	// die();


	
	foreach ($paginas as $pagina) {
		?>
		<!-- Se for a 1a pagina coloca a margem de uma coluna antes para ajustar o layout -->
			<div class="col-xs-6 col-sm-2 <?php  echo $pagina === reset($paginas) ? 'col-sm-offset-1' : ''; ?>">
				<a href=" <?php echo get_the_permalink($pagina); ?>">
					<div class="portfolio-categoria-body<?php 
						if(!$post->post_parent){ 
							echo '';
						}else if($post->post_name !== $pagina->post_name) echo ' gray-cat'; 
					?>">
						<div>
							<img src=" <?php echo get_the_post_thumbnail_url($pagina->ID);  ?>" alt="Desenvolvimento Tecnológico">
							<p><?php echo $pagina->post_title; ?> </p> 
						</div>
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

			$currentPage = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$args = [
				'post_type' => 'projeto',
				'category_name' => $post->post_name,
				'posts_per_page' => 6,
				'paged' => $currentPage
			];
			$projetos = new WP_Query($args);
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
		 ?>
		</div>
		<?php
			echo paginate_links([
				'total' => $projetos->max_num_pages,
				//'type' => 'list'
			]); 
			wp_reset_postdata();
		?>
