<?php /* Template Name: Dịch vụ his-lis */ get_header('xuanthanhphat'); ?>
<main>
    <!-- banner liên hệ  -->
    <section id="contact_banner">
        <div class="container">
            <div class="contact_banner_title">
                <h2><?php echo get_the_title(); ?></h2>
                <hr>
                <p><?php echo get_the_content(); ?></p>
            </div>
        </div>
    </section>

    <section id="intro_his" style="<?php echo have_rows('intro_his-lis') ? 'padding: 60px 0;' : 'padding: 0;' ?>">

        <div class="container">

            <?php if (have_rows('intro_his-lis')) : ?>

                <?php while (have_rows('intro_his-lis')) : the_row(); ?>

                    <div class="intro_his_title">

                        <h3><?php the_sub_field('tieu_de'); ?></h3>

                        <hr>

                        <p><?php the_sub_field('content'); ?></p>

                    </div>

                    <div class="intro_his_box">

                        <?php if (have_rows('his_lis-item')) : ?>

                            <?php while (have_rows('his_lis-item')) : the_row(); ?>

                                <div class="intro_his_item">

                                    <i class="<?php the_sub_field('icon'); ?>"></i>

                                    <h4><?php the_sub_field('title'); ?></h4>

                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </section>

    <section id="his_lis_benefit" style="<?php echo have_rows('benefit') ? 'padding: 60px 0;background: #211f3b' : 'padding: 0;' ?>">

        <div class="container">

            <?php if (have_rows('benefit')) : ?>

                <?php while (have_rows('benefit')) : the_row(); ?>

                    <div class="benefit_title">

                        <h3><?php the_sub_field('tieu_de'); ?></h3>

                        <hr>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 col-md-6">

                            <div class="benefit_box">

                                <?php if (have_rows('benefit_item')) : ?>

                                    <?php while (have_rows('benefit_item')) : the_row(); ?>

                                        <div class="benefit_item">
                                            <div class="benefit_item_icon">
                                                <img src="<?php the_sub_field('icon') ?>" alt="<?php the_sub_field('tieu_de') ?>">
                                            </div>
                                            <div class="benefit_item_content">
                                                <h4><?php the_sub_field('title'); ?></h4>
                                                <p><?php the_sub_field('content'); ?></p>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="benefit-image">
                                <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('tieu_de') ?>">
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </section>
                        
    <section id="feature">

        <?php if (have_rows('feature')) : ?>

            <?php while (have_rows('feature')) : the_row(); ?>

                <div class="feature_title">

                    <h3><?php the_sub_field('tieu_de'); ?></h3>

                    <hr>
                </div>
        
                <?php $i = 0;
                if (have_rows('service_child')) : ?>
                    <?php while (have_rows('service_child')) : the_row();
                        $i++; ?>
                        <div class="design_block" id="design_block-<?php echo $i; ?>">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 <?php echo $i % 2 == 0 ? 'order-lg-2' : 'order-lg-1' ?>">
                                        <div class="design_mobile_app_img">
                                            <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" class="img_new wow fadeIn<?php echo $i % 2 == 0 ? 'Right' : 'Left' ?> " data-wow-duration="2s">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 <?php echo $i % 2 == 0 ? 'order-lg-1' : 'order-lg-2' ?>">
                                        <div class="design_mobile_app-text-details">
                                            <div class="design_mobile_app-text"><?php the_sub_field('content'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            <?php
                            $bg = get_sub_field('background-image');
                            $bg_color = get_sub_field('background-color');
                            if (!empty($bg)) : ?>
                            #design_block-<?php echo $i; ?> {
                                background-color: rgba(0, 0, 0, 0.4);
                                background-image: url(<?php echo $bg; ?>);
                                background-repeat: no-repeat;
                                background-size: cover;
                            }

                            <?php endif;
                            if (!empty($bg_color)) : ?>
                            #design_block-<?php echo $i; ?> {
                                background-color: <?php echo $bg_color; ?>;
                            }

                            <?php endif;
                            if ($i % 2 == 0) : ?>
                            #design_block-<?php echo $i; ?> .design_mobile_app-text-details {
                                color: #666;
                            }

                            <?php endif; ?>
                            #design_block-<?php echo $i; ?> .design_mobile_app_img {
                                bottom: <?php echo get_sub_field('bottom') ? get_sub_field('bottom') . 'px' : 'inherit' ?>;
                                padding-left: <?php echo get_sub_field('left') ? get_sub_field('left') . 'px' : 'inherit' ?>;
                                padding-right: <?php echo get_sub_field('right') ? get_sub_field('right') . 'px' : 'inherit' ?>;
                            }
                        </style>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <!-- Video -->
    <section id="video " style="<?php echo have_rows('video_project') ? 'padding: 60px 0;' : 'padding: 0;' ?>">
        <div class="container">
            <div class="row">
                <?php if (have_rows('video_project')) : ?>
                    <?php while (have_rows('video_project')) : the_row(); ?>
                        <div class="col-lg-7">
                            <iframe style="width: 100%; " src="<?php the_sub_field('video'); ?>" data-src="<?php the_sub_field('video'); ?>" class="my-lazy " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                        <div class="col-lg-5">
                            <div class="video_box">
                                <h3 style="margin-left:none;text-align:center;font-size:21px;" class="procedure-title"><?php the_sub_field('title'); ?></h3>
                                <div class="procedure-line" style="margin: 15px 0;"></div>
                                <div class="owl-carousel owl-theme owl-project">
                                    <?php if (have_rows('content')) : ?>
                                        <?php while (have_rows('content')) : the_row(); ?>
                                            <div class="item">
                                                <a data-fancybox="gallery1" href="<?php the_sub_field('image'); ?>" style="background: url(<?php the_sub_field('image'); ?>) no-repeat; background-position: center;
                                                        background-size: cover; height: 280px; display: block;">
                                                </a>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="contact_his" style="<?php echo have_rows('contact_his') ? 'padding: 60px 0;' : 'padding: 0;' ?>">

        <div class="container">

            <?php if (have_rows('contact_his')) : ?>

                <?php while (have_rows('contact_his')) : the_row(); ?>

                    <div class="contact_his_title">

                        <h3><?php the_sub_field('title'); ?></h3>

                        <hr>

                        <p><?php the_sub_field('content'); ?></p>

                    </div>

                    <div class="start_from-button">
                        <a href="<?php the_sub_field('link'); ?>"  class="escapea" data-bg-disabled="true"> 
                            <i class="icomoon icomoon-icon-thumbs-up  animate-icon animate-to-left"></i> 
                            <span>Liên hệ tư vấn miễn phí</span></a>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </section>
</main>



<?php
get_footer('xuanthanhphat');
