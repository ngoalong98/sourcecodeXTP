<?php /* Template Name: Dịch vụ network security */ get_header(); ?>

<main>

    <div id="service_page">

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

        <section id="security">

            <div class="container">

                <div class="row">

                    <?php if (have_rows('security')) : ?>

                        <?php while (have_rows('security')) : the_row(); ?>

                            <div class="col-lg-6">

                                <div class="security_box">

                                    <div class="security_text">

                                        <?php the_sub_field('content'); ?>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="security_img">

                                    <img src="<?php the_sub_field('image'); ?>">

                                </div>

                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>

        </section>

        <?php $i = 0;
        if (have_rows('sercurity_content')) : ?>
            <?php while (have_rows('sercurity_content')) : the_row();
                $i++; ?>
                <section class="design_block" id="design_block-<?php echo $i; ?>">
                    <div class="container">
                        <div class="sercurity_title">

                            <h3><?php the_sub_field('title'); ?></h3>

                            <hr>

                        </div>
                        <div class="row">
                            <div class="col-lg-7 <?php echo $i % 2 == 0 ? 'order-lg-2' : 'order-lg-1' ?>">
                                <div class="design_img">
                                    <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" class="img_new wow fadeIn<?php echo $i % 2 == 0 ? 'Right' : 'Left' ?> " data-wow-duration="2s">
                                </div>
                            </div>
                            <div class="col-lg-5 <?php echo $i % 2 == 0 ? 'order-lg-1' : 'order-lg-2' ?>">
                                <div class="design_text-details">
                                    <p><?php the_sub_field('content'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <style>
                    <?php
                    $bg = get_sub_field('background-image');
                    $bg_color = get_sub_field('background');
                    if (!empty($bg)) : ?>#design_block-<?php echo $i; ?> {
                        background-color: rgba(0, 0, 0, 0.4);
                        background-image: url(<?php echo $bg; ?>);
                        background-repeat: no-repeat;
                        background-size: cover;
                    }

                    <?php endif;
                    if (!empty($bg_color)) : ?>#design_block-<?php echo $i; ?> {
                        background-color: <?php echo $bg_color; ?>;
                    }

                    <?php endif;
                    if( $i%2==0 ): ?>
                        #design_block-<?php echo $i; ?> .sercurity_title h3{
                            color: #1b1d21;
                        }
                    <?php else: ?>
                        #design_block-<?php echo $i; ?> .sercurity_title h3{
                            color: #fff;
                        }
                    <?php endif;   

                    if( $i%2==0 ): ?>
                        #design_block-<?php echo $i; ?> .design_text-details p{
                            color: #6d6d6d;
                        }
                    <?php else: ?>
                        #design_block-<?php echo $i; ?> .design_text-details p{
                            color: #fafafa;
                        }
                    <?php endif; ?>   
                    
                    #design_block-<?php echo $i; ?> .design_img {
                        bottom: <?php echo get_sub_field('bottom') ? get_sub_field('bottom') . 'px' : 'inherit' ?>;
                        margin-left: <?php echo get_sub_field('left') ? get_sub_field('left') . 'px' : 'inherit' ?>;
                        margin-right: <?php echo get_sub_field('right') ? get_sub_field('right') . 'px' : 'inherit' ?>;
                    }
                </style>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer('xuanthanhphat'); ?>