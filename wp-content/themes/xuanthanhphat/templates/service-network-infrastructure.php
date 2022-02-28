<?php /* Template Name: Dịch vụ network infrastructure */ get_header(); ?>

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

    <section id="network-infrastructure">

        <div class="container">

                <?php if (have_rows('network_infrastructure')) : ?>

                    <?php while (have_rows('network_infrastructure')) : the_row(); ?>

                        <div class="service_block_box-network" style="padding-top: 20px;">

                            <h3><?php the_sub_field('title'); ?></h3>

                            <div class="service_block_box_content">

                                <?php the_sub_field('content'); ?>

                            </div>

                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>

        </div>

    </section>
</main>
<?php get_footer('xuanthanhphat'); ?>