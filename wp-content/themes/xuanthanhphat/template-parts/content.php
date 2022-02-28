<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xuanthanhphat
 */

?>

<div id="content">
	<div class="container">
		<div class="break" style="padding: 15px 0;">
			<?php if(function_exists('yoast_breadcrumb')) {yoast_breadcrumb('<p id="breakcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8">
				<div class="post-news">
					<h1 class="title-news"><?php single_cat_title();?></h1>
					<div class="content-news">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php setpostview(get_the_ID());?>
							<h2 class="single-title" style="font-size: 21px;"><?php the_title();?></h2>
							<div class="meta">
								<span>Ngày đăng: <?php echo get_the_date('d - m - Y');?></span>
								<span>Tác giả: <?php the_author();?></span>
								<span>Chuyên mục: <?php the_category(', ');?></span>
								<span>Lượt xem: <?php echo getpostviews(get_the_ID());?> lượt</span>
							</div>
							<article class="post-content">
								<?php the_content();?>
							</article>
							<div class="tag">
								<p><?php the_tags('Từ khoá: ');?></p>
							</div>
							<div class="like">
							<div class="fb-like" data-href="<?php the_permalink();?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
							</div>
							<div class="comment">
							<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5"></div>
							</div>
							<div class="content-lienquan">
								<h3>Bài viết liên quan</h3>
								<div class="post-list">
									<?php
										$categories = get_the_category($post->ID);
										if ($categories) 
										{
											$category_ids = array();
											foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
									
											$args=array(
											'category__in' => $category_ids,
											'post__not_in' => array($post->ID),
											'showposts'=>5 // Số bài viết bạn muốn hiển thị.
											// 'caller_get_posts'=>1
											);
											$my_query = new wp_query($args);
											if( $my_query->have_posts() ) 
											{
												echo '<ul>';
												while ($my_query->have_posts())
												{
													$my_query->the_post();
													?>
														<li>
															<i class="fa fa-caret-right"></i>
															<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
														</li>
													<?php
												}
												echo '</ul>';
											}
										}
									?>
								</div>
							</div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>  
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="sidebar">
					<?php get_sidebar();?>
				</div>
			</div>
		</div>
	</div>
</div>