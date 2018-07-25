<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package parallax-one
 */
$pname = get_post($post->post_parent)->post_name;

?>

<?php 
	get_template_part( 'page', $pname ); 
	//include('page-projetos.php');
?>

