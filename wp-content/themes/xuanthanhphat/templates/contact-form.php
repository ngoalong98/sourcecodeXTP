<?php /* Template Name: Contact-form */ get_header('xuanthanhphat'); ?>

<main>

    <!-- banner liên hệ  -->

    <section id="contact_banner">

        <div class="container">

            <div class="contact_banner_title">

                <h2><?php the_title(); ?></h2>

                <hr>

                <p><?php the_content(); ?></p>

            </div>

        </div>

    </section>

    <!-- Gii thiệu -->

    <section id="contact_form">

        <div class="container">

            <div class="row">

                <?php if (have_rows('thong_tin')) : ?>

                    <?php while (have_rows('thong_tin')) : the_row(); ?>

                        <div class="col-md-6">

                            <div class="contact_form_box">

                                <h3><?php the_sub_field('title'); ?></h3>

                                <p><?php the_sub_field('content'); ?></p>

                                <p><i class="icomoon icomoon-icon-compass"></i>

                                    <span>Email:</span>

                                    <a href="mailto:<?php the_field('email', 'option'); ?>"> <?php the_field('email', 'option'); ?></a>

                                </p>

                                <p><i class="icomoon icomoon-icon-phone "></i>

                                    <span>Hotline:</span> <?php the_field('st_phone', 'option'); ?>

                                </p>

                                <div><img src="https://cooftech.com/upload/icon/ping.png " alt="">

                                    <span>Address:</span> <span><?php the_field('st_address', 'option'); ?></span>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <?php the_sub_field('form'); ?>

                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>

        </div>

    </section>

    <!-- map -->

    <section id="contact_map">

        <?php if (have_rows('ban_do')) : ?>

            <?php while (have_rows('ban_do')) : the_row(); ?>

                <?php the_sub_field('map'); ?>
                
            <?php endwhile; ?>

        <?php endif; ?>
        
    </section>

</main>

<?php

get_footer('xuanthanhphat');



?>