<?php /* Template Name: Contact */ get_header('xuanthanhphat'); ?>

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

                <div class="col-md-6">

                    <div class="contact_form_box">

                        <h3>LIÊN HỆ NGAY VỚI CHÚNG TÔI</h3>

                        <p>Bạn có muốn trò chuyện với các chuyên gia của chúng tôi không? Điền vào các thông tin bên dưới và khai báo rõ ràng chính xác, chúng tôi sẽ liên lạc với bạn. Hoặc bạn có thể gửi email cho chúng tôi nếu muốn được trao đổi chi tiết hơn.</p>

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

                    <?php echo do_shortcode('[contact-form-7 id="167" title="liên hệ"]'); ?>

                </div>

            </div>

        </div>

    </section>

    <!-- map -->

    <section id="contact_map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14896.480098074077!2d105.794101!3d21.027883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4db23779f3c68f79!2sN09B2%20Building!5e0!3m2!1svi!2sus!4v1630395291644!5m2!1svi!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </section>

</main>

<?php

get_footer('xuanthanhphat');



?>