<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xuanthanhphat
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="search-detail">
		<div class="row">
			<div class="col-4">
				<div class="search-thumbnail">
					<a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?></a>
				</div> 
			</div>
			<div class="col-8">
				<div class="search-content">
					<a href="<?php the_permalink();?>"><?php the_title();?></a>     
					<p><?php the_excerpt();?></p>
					<div class="meta">
						<i class="fas fa-calendar-alt"></i> <?php echo get_the_date();?>
					</div>
				</div>
			</div>
		</div>         
		<div class="clear"></div>
	</div>	
</article><!-- #post-<?php the_ID(); ?> -->
<div class="clear"></div>
