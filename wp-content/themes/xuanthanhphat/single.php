<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xuanthanhphat
 */

get_header();
?>
	<?php	

		get_template_part( 'template-parts/content', get_post_type() );

	?>
<?php
get_footer("xuanthanhphat");
