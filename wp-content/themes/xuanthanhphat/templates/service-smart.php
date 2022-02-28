<?php /* Template Name: Dịch vụ smart */ get_header(); ?>

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

        <section id="smart_solution">

            <div class="container">

                <div class="row">

                    <?php if (have_rows('solution')) : ?>

                        <?php while (have_rows('solution')) : the_row(); ?>

                            <div class="col-lg-6">

                                <div class="solution_xtp_box">

                                    <h3><?php the_sub_field('title'); ?></h3>

                                    <hr>

                                    <div class="solution_xtp_box_text">

                                        <?php the_sub_field('content'); ?>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="solution_img">

                                    <img src="<?php the_sub_field('image'); ?>">

                                </div>

                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>

        </section>

        <section id="smart_our_solution">

            <div class="container">

                <?php if (have_rows('our_solution')) : ?>

                    <?php while (have_rows('our_solution')) : the_row(); ?>

                        <div class="our_solution_xtp_box">

                            <h3><?php the_sub_field('tieu_de'); ?></h3>

                            <hr>

                        </div>

                        <div class="row">
                            <?php $i = 0;
                            if (have_rows('solution_item')) : ?>

                                <?php while (have_rows('solution_item')) : the_row();
                                    $i++; ?>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="box ">
                                            <div class="box-icon">
                                                <i class="icon-<?php echo $i; ?> <?php the_sub_field('icon'); ?>"></i>
                                            </div>
                                            <h3 class="box-title"><?php the_sub_field('title'); ?></h3>
                                        </div>
                                    </div>

                                    <style>
                                        <?php
                                        $bg_color = get_sub_field('background_color');
                                        if (isset($bg_color)) : ?>.icon-<?php echo $i; ?> {
                                            color: <?php echo $bg_color; ?>;
                                            font-size: 70px;
                                        }

                                        <?php endif; ?>
                                    </style>

                                <?php endwhile; ?>

                            <?php endif; ?>

                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>

        </section>

        <section id="smart_education">

            <div class="container">

                <?php if (have_rows('education')) : ?>

                    <?php while (have_rows('education')) : the_row(); ?>

                        <div class="education_xtp_box">

                            <h3><?php the_sub_field('tieu_de'); ?></h3>

                            <hr>

                            <div class="education_xtp_box_text">
                                <p><?php the_sub_field('noi_dung'); ?></p>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6 col-md-6">
                                <div class="education-video">
                                    <iframe width="853" height="480" src="<?php the_sub_field('video'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">

                                <div class="education_box">

                                    <?php if (have_rows('education_item')) : ?>

                                        <?php while (have_rows('education_item')) : the_row(); ?>

                                            <div class="education_item">
                                                <div class="education_item_icon">
                                                    <?php the_sub_field('icon'); ?>
                                                </div>
                                                <div class="education_item_content">
                                                    <h4><?php the_sub_field('title'); ?></h4>
                                                    <p><?php the_sub_field('content'); ?></p>
                                                </div>
                                            </div>

                                        <?php endwhile; ?>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>




        </section>

        <section id="smart_technology">

            <div class="container">

                <?php if (have_rows('technology')) : ?>

                    <?php while (have_rows('technology')) : the_row(); ?>

                        <div class="technology_xtp_box">

                            <h3><?php the_sub_field('tieu_de'); ?></h3>

                            <hr>

                        </div>
                        <div class="row">

                            <div class="col-sm-6 col-md-7">

                                <div class="technology_box">

                                    <?php $i = 0;
                                    if (have_rows('technology_item')) : ?>

                                        <?php while (have_rows('technology_item')) : the_row();
                                            $i++; ?>

                                            <div class="technology_item wow fadeIn<?php echo $i % 2 == 0 ? 'Right' : 'Left' ?>">
                                                <div class="technology_item_icon">
                                                    <i class="icon-<?php echo $i; ?> <?php the_sub_field('icon'); ?>"></i>
                                                </div>
                                                <div class="technology_item_content">
                                                    <h4><?php the_sub_field('title'); ?></h4>
                                                    <p><?php the_sub_field('content'); ?></p>
                                                </div>
                                            </div>
                                            <style>
                                                <?php
                                                $bg_color = get_sub_field('background_color');
                                                if (isset($bg_color)) : ?>.icon-<?php echo $i; ?> {
                                                    color: <?php echo $bg_color; ?>;
                                                }

                                                <?php endif; ?>
                                            </style>

                                        <?php endwhile; ?>

                                    <?php endif; ?>

                                </div>

                            </div>
                            <div class="col-sm-6 col-md-5">
                                <div class="technology_img">
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>



        </section>

        <section id="smart_project">
            <div class="container">
                <div class="smart_project_title">
                    <h3>Dự án đang triển khai</h3>
                    <hr>
                </div>
                <div class="owl-carousel owl-theme owl-smart_project">
                    <?php if (have_rows('smart_project')) : ?>
                        <?php while (have_rows('smart_project')) : the_row(); ?>
                            <div class="item">
                                <a data-fancybox="gallery2" href="<?php the_sub_field('image'); ?>" style="background: url(<?php the_sub_field('image'); ?>) no-repeat; background-position: center;
                                                        background-size: cover; height: 280px; display: block;border-radius:20px;">
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>  
                </div>
            </div>
        </section>
    </div>

</main>







<?php get_footer('xuanthanhphat'); ?>