<?php /* Template Name: Dịch vụ app */ get_header(); ?>

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

        

        <!-- service tính năng -->

        <section id="service_feature">

            <div class="container">

                <div class="row">			

                    <div class="col-md-12  <?php echo have_rows('service_feature_child') ? 'col-lg-5' : 'col-lg-12' ?>">

                        <div class="service_feature_img">

                            <img src="<?php the_field('service_image'); ?>" alt="">

                        </div>

                    </div>

                    <div class="col-md-12 col-lg-7">

                        <div class="service_feature_box">

                            <?php $i=0; if( have_rows('service_feature_child') ): ?>

                                <?php while( have_rows('service_feature_child') ): the_row(); $i++;?>			

                                    <div class="service_feature_child">

                                        <div class="media">

                                            <div class="achievement-icon"><i class="icomoon icomoon-icon-<?php the_sub_field('icon'); ?>"></i></div>

                                            <div class="media-body">
                                             
                                                <h4><span id="mobile_start-<?php echo $i; ?>"><?php the_sub_field('number'); ?></span> <sup><?php the_sub_field('number_sup'); ?></sup></h4>

                                                <p><?php the_sub_field('title'); ?></p>

                                            </div>

                                        </div>

                                        <p class="service_feature_child_p"><?php the_sub_field('content'); ?></p>

                                    </div>

                                <?php endwhile; ?>

                            <?php endif; ?>

                        </div>

                    </div>
                </div>

            </div>

        </section>



        <!-- service block -->

        <?php if( have_rows('service_block') ): ?>

            <?php while( have_rows('service_block') ): the_row();?>			

                <section class="service_block">

                    <div class="container">

                        <div class="service_block_box">

                            <h3><?php the_sub_field('title'); ?></h3>

                            <!-- <hr> -->

                            <div class="service_block_box_content">

                                <?php the_sub_field('content'); ?>

                            </div>

                        </div>

                    </div>

                </section>

            <?php endwhile; ?>

        <?php endif; ?>

        



    </div>

</main>



	



<?php get_footer('xuanthanhphat'); ?>