<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xuanthanhphat
 */

get_header();
?>  
    <section id="banner">
        <div class="owl-carousel owl-theme owl-banner" data-autoPlay="true">
            <div class="item">
                <video width="100%" autoplay loop muted playsinline >
                    <source src="<?php bloginfo('template_url')?>/assets/imgs/banner1.mp4" type="video/mp4">
                </video>
            </div>
            <div class="item">
                <video width="100%" autoplay loop muted playsinline >
                    <source src="<?php bloginfo('template_url')?>/assets/imgs/banner2.mp4" type="video/mp4">
                </video>
            </div>
            <div class="item">
                <video width="100%" autoplay loop muted playsinline >
                    <source src="<?php bloginfo('template_url')?>/assets/imgs/banner3.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
    <!-- interactive -->
    <section id="interactive">
        <div class="container">
            <div class="row">
				<?php $i=0;if( have_rows('interactive') ): ?>
					<?php while( have_rows('interactive') ): the_row();$i++; ?>			
						<div class="col-sm-6 col-md-4">
							<div class="interactive-child">
								<div class="interactive-child-icon <?php  if($i==2){echo 'active';}  ?>"><i class="icomoon icomoon-icon-<?php the_sub_field('icon'); ?> icon-3"></i></div>
								<h3><?php the_sub_field('title'); ?></h3>
								<p><?php the_sub_field('content'); ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
            <div class="interactive-down text-center">
                <a href="#procedure"><i class="azoom-down-arrow-icon icomoon icomoon-icon-azoom-arrow-down "></i></a>
            </div>
        </div>
    </section>
    <!-- Quy trình -->
    <section id="procedure">
        <div class="container">
            <?php if( have_rows('procedure') ): ?>
                <?php while( have_rows('procedure') ): the_row(); ?>
                    <h3 class="procedure-title"><?php the_sub_field('title'); ?></h3>
                    <div class="procedure-line"></div>
                    <p class="procedure-text"> <?php the_sub_field('content'); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- Quy trình slide -->
    <section id="procedure_slide">
        <section class="ps-timeline-sec">
            <div class="container">
                <ol class="ps-timeline">
                    <?php $dem=0;if( have_rows('procedure_slide') ): ?>
                        <?php while( have_rows('procedure_slide') ): the_row(); $dem++;
                            if ($dem %2==0):
                            ?>
                            <li>
                                <div class="img-handler-bot">
                                    <img src="<?php the_sub_field('icon'); ?>" alt="" />                  
                                </div>
                                <div class="ps-top">
                                    <h4><?php the_sub_field('title'); ?></h4>
                                    <p><?php the_sub_field('content'); ?></p>
                                </div>
                                <span class="ps-sp-bot">0<?php  echo $dem; ?></span>
                            </li>
                            <?php else:           
                            ?>
                            <li>
                                <div class="img-handler-top">
                                    <img src="<?php the_sub_field('icon'); ?>" alt="" />                  
                                </div>
                                <div class="ps-bot">
                                    <h4><?php the_sub_field('title'); ?></h4>
                                    <p><?php the_sub_field('content'); ?></p>
                                </div>
                                <span class="ps-sp-top">0<?php  echo $dem; ?></span>
                            </li>
                        <?php endif; endwhile; ?>
                    <?php endif; ?> 
                </ol>
            </div>
        </section>
    </section>
    <div id="service">
        <?php $i=0;if( have_rows('design') ): ?>
            <?php while( have_rows('design') ): the_row();$i++; ?>
                <section class="design_block" id="design_block-<?php echo $i; ?>">
                    <div class="container">
                        <div class="row">       
                            <div class="col-lg-7 <?php echo $i%2==0 ? 'order-lg-2' : 'order-lg-1' ?>">
                                <div class="design_mobile_app_img" >
                                    <img src="<?php the_sub_field('image'); ?>"  alt="<?php the_sub_field('title'); ?>" class=" wow fadeIn<?php echo $i%2==0 ? 'Right' : 'Left' ?>" data-wow-duration="2s">
                                </div>
                            </div>
                            <div class="col-lg-5 <?php echo $i%2==0 ? 'order-lg-1' : 'order-lg-2' ?>">
                                <div class="design_mobile_app-text-details">
                                    <h2 class="design_mobile_app-title"><strong>0<?php echo $i; ?>.</strong><br><strong><?php the_sub_field('title'); ?></strong></h2>
                                    <div class="design_mobile_app-text"><?php the_sub_field('content'); ?></div>
                                </div>
                                <div class="design_mobile_app-button">
                                    <a href="<?php the_sub_field('link'); ?>" class="escapeat">Xem chi tiết <i class="icomoon icomoon-icon-redo2"></i> </a>
                                    <a href="<?php the_sub_field('link__catalogue'); ?>" class="escapeat">Nhận Catalogue <i class="icomoon icomoon-icon-redo2"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <style>
                <?php 
                    $bg = get_sub_field('background_image');
                    $bg_color = get_sub_field('background_color');
                    if( !empty( $bg ) ): ?>
                        #design_block-<?php echo $i; ?> {
                            background-color: rgba(0, 0, 0, 0.4);
                            background-image: url(<?php echo $bg; ?>);
                            background-repeat: no-repeat;
                            background-size: cover;
                        }
                    <?php endif; 
                    if( !empty( $bg_color ) ): ?>
                        #design_block-<?php echo $i; ?> {
                            background-color: <?php echo $bg_color; ?>;
                        }
                    <?php endif; 
                    if( $i%2==0 ): ?>
                        #design_block-<?php echo $i; ?> .design_mobile_app-text-details {
                            color: #666;
                        }
                    <?php endif; ?>     
                    #design_block-<?php echo $i; ?> .design_mobile_app_img  {
                        height: 100%;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        padding-bottom: <?php echo get_sub_field('bottom') ? get_sub_field('bottom').'px' : 'inherit' ?>;
                        padding-left: <?php echo get_sub_field('left') ? get_sub_field('left').'px' : 'inherit' ?>;
                        padding-right: <?php echo get_sub_field('right') ? get_sub_field('right').'px' : 'inherit' ?>;
                    }
                </style>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <!-- KHởi đầu từ -->
    <section id="start_from">
        <div class="container">
            <div class="row">
                <?php if( have_rows('start_from') ): ?>
                    <?php while( have_rows('start_from') ): the_row();?>			
                        <div class="col-md-12 col-lg-8 offset-lg-2">
                            <h3 class="start_from-title"> <?php the_sub_field('title'); ?></h3>
                            <p class="start_from-text"><?php the_sub_field('content'); ?></p>
                            <div class="start_from-button">
                                <a href="<?php the_sub_field('link'); ?>" style="" class="escapea" data-bg-disabled="true"> <i class="icomoon icomoon-icon-thumbs-up  animate-icon animate-to-left"></i> <span>Liên hệ ngay</span></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>        
            </div>
        </div>
    </section>
    <!-- Video -->
    <section id="video">
        <div class="container">
            <div class="row">
                <?php if( have_rows('video') ): ?>
                    <?php while( have_rows('video') ): the_row();?>			
                        <div class="col-md-7">
                            <iframe src="<?php the_sub_field('youtube'); ?>" data-src="<?php the_sub_field('youtube'); ?>" class="my-lazy" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                        <div class="col-md-5">
                            <div class="video_box">
                                <h3 class="procedure-title"><?php the_sub_field('title'); ?></h3>
                                <div class="procedure-line"></div>
                                <p> <?php the_sub_field('content'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>              
            </div>
        </div>
    </section>
    <section id="intro_customer">
        <div class="intro_customer_ng">
            <div class="container">
                <div class="intro_customer_title">
                    <h3>Dự án tiêu biểu</h3>
                    <hr>
                </div>
                <div class="owl-carousel owl-theme owl-partner">
                    <?php if( have_rows('intro_customer') ): ?>
                        <?php while( have_rows('intro_customer') ): the_row();?>			
                            <div class="item">
                                <a href="#"><img src="<?php the_sub_field('image'); ?>"></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Số liệu -->
    <section id="data_start">
        <div class="container">
            <?php $i=0;if( have_rows('data_start') ): ?>
                <?php while( have_rows('data_start') ): the_row();$i++;?>	
                    <div class="row">
                        <?php $i=0;if( have_rows('data-number') ): ?>
                            <?php while( have_rows('data-number') ): the_row();$i++;?>			
                                <div class="col-md-4">
                                    <div class="media">
                                        <div class="achievement-icon"><i class="icomoon icomoon-icon-<?php the_sub_field('icon'); ?>"></i></div>
                                        <div class="media-body">
                                            <h4><span id="data_start-<?php echo $i; ?>"><?php //the_sub_field('number'); ?></span> <sup>+</sup></h4>
                                            <p><?php the_sub_field('title'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="data_start_box">
                                <h3><?php the_sub_field('tieu-de'); ?></h3>
                                <p><?php the_sub_field('content'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="data_start_box_btn">
                                <a href="<?php the_sub_field('lien-he'); ?>" class="escapea"> <i class="icomoon icomoon-icon-redo2"></i><span>Liên hệ</span></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <!--Đối tác -->
    <section id="partner">
        <div class="container">
            <?php if( have_rows('partner') ): ?>
                <?php while( have_rows('partner') ): the_row();?>	
                    <div class="partner-title">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <p><?php the_sub_field('content'); ?></p>
                    </div>
                    <div class="partner_box">
                        <?php $i=0;if( have_rows('image') ): ?>
                            <?php while( have_rows('image') ): the_row();$i++;?>			
                                <div class="partner_child <?php if($i%2==0) {echo 'partner_child_even';} ?>">
                                    <a href="#"><img src="<?php the_sub_field('image'); ?>"></a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- Đội ngũ -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php if( have_rows('team') ): ?>
                        <?php while( have_rows('team') ): the_row();?>	
                            <div class="team_box">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('content'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <div class="azoom-skill active">
                        <div class="azoom-skill-bg" style="background:#f0f0f0;"></div>
                        <div id="team-1" class="azoom-skill-value-bg" style="background:#f63149; width:40%;">
                            <div class="azoom-skill-value">95%</div>
                        </div>
                        <div class="azoom-skill-title cft-lang">Tài Năng</div>
                    </div>
                    <div class="azoom-skill active">
                        <div class="azoom-skill-bg" style="background:#f0f0f0;"></div>
                        <div id="team-2" class="azoom-skill-value-bg" style="background:#2196f3; width:40%;">
                            <div class="azoom-skill-value">90%</div>
                        </div>
                        <div class="azoom-skill-title cft-lang">Kinh Nghiệm</div>
                    </div>
                    <div  class="azoom-skill active">
                        <div class="azoom-skill-bg" style="background:#f0f0f0;"></div>
                        <div id="team-3" class="azoom-skill-value-bg" style="background:#4caf50; width:40%;">
                            <div class="azoom-skill-value">99%</div>
                        </div>
                        <div class="azoom-skill-title cft-lang" key="HOME-BLOCK9-15">Tâm Huyết</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="container">
            <div class="news-title">
                <h3 style="text-align: center;">Tin Tức Nổi Bật</h3>
            </div>
            <div class="owl-carousel owl-theme owl-news">
                <?php 
                    $args = array(
                        'post_status' => 'publish', 
                        'post_type' => 'post',   
                        'showposts' => 20 ,
                        'cat' => 7
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?> 
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                    <div class="item">
                        <div class="card">              
                            <a href="<?php the_permalink() ;?>">
                                <img  style="width: 100%;" class="card-img-top" src="<?php echo $featured_img_url;?>" alt="<?php the_title() ;?>">
                            </a>
                            <div class="card-body">
                                <a href="<?php the_permalink() ;?>"><h4 class="card-title"><?php the_title() ;?></h4></a>
                                <p class="card-text"><?php echo teaser(30); ?></p>                         
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>     
    </section>
    <div id="rockthemes-inline-nav">
        <ul>
            <li class="">
                <span class="rin-title">Wellcome</span>
                <a href="#banner"><span class="rin-handler"></span></a>
            </li>
            <li>
                <span class="rin-title">Quy trình</span>
                <a href="#procedure"><span class="rin-handler"></span></a>
            </li>
            <li>
                <span class="rin-title">Dịch vụ</span>
                <a href="#service"><span class="rin-handler"></span></a>
            </li>
            <li>
                <span class="rin-title">Liên hệ</span>
                <a href="#start_from"><span class="rin-handler"></span></a>
            </li>
            <li>
                <span class="rin-title">Dự án</span>
                <a href="#intro_customer"><span class="rin-handler"></span></a>
            </li>
            <li>
                <span class="rin-title">Đối tác</span>
                <a href="#partner"><span class="rin-handler"></span></a>
            </li>
        </ul>
    </div>
<?php
get_footer("xuanthanhphat");
