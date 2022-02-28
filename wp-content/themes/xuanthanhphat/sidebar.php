
<div class="sidebar">
	<div  class="sidebar-widget widget-sticky"  style="margin-bottom: 20px;">
		<div class="posts-title widget">
			<h3>DỊCH VỤ</h3>
		</div>
		<div class="content-w">
			<?php wp_nav_menu(
				array(
					'theme_location' => 'footer-sevice',
					'container' => 'false',
					'menu_id' => 'footer-sevice',

				)
			); ?>
		</div>
		<a href="<?php echo home_url(); ?>"><img style="width:100%;" src="<?php bloginfo('template_url') ?>/assets/imgs/bannerXTP.jpg" alt=""></a>
	</div>
	<div class="sidebar-widget widget-nosticky" >
		<div class="posts-title widget">
			<h3>BÀI VIẾT NỔI BẬT</h3>
		</div>
		<div class="posts-care-child">
			<?php
			$args = array(
				'post_status' => 'publish',
				'post_type' => 'post',
				'showposts' => 7,
				'cat' => 7
			);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query;
			$wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
				<div class="media">
					<div class="media-img">
						<a href="<?php the_permalink(); ?>"><img style="height: auto;" src="<?php echo $featured_img_url ?>" alt="<?php the_title(); ?>"></a>
					</div>
					<div class="media-body">
						<h4 style="font-size: 14px;font-weight:500;" class="media-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="card-date">
							<span style="font-size: 13px;" class="time"><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
						</div>
					</div>
				</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
		</div>
	</div>
</div>