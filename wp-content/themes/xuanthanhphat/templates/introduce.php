<?php /* Template Name: Giới thiệu */ get_header('xuanthanhphat'); ?>

<main>

    <!-- banner giới thiệu  -->

    <section id="intro_banner">

        <div class="container">

            <div class="intro_banner_title">

                <h2><?php the_title(); ?></h2>

            </div>

        </div>

    </section>



    <!-- Giới thiệu -->

    <section id="intro_xtp">

        <div class="container">

            <div class="row">

                <?php if( have_rows('about') ): ?>

                    <?php while( have_rows('about') ): the_row();?>			

                        <div class="col-lg-6">

                            <div class="intro_xtp_box">

                                <h3><?php the_sub_field('title'); ?></h3>

                                <hr>

                                <div class="intro_xtp_box_text">

                                    <?php the_sub_field('content'); ?>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="intro_img">

                                <img src="<?php the_sub_field('image'); ?>" >

                            </div>

                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>        

            </div>

            

        </div>

    </section>
  
  	 <!-- Giải thưởng -->

    <section id="intro_prize">

        <div class="container">

            <div class="row">
                <?php $i=0;if( have_rows('interactive_about') ): ?>
					<?php while( have_rows('interactive_about') ): the_row();$i++; ?>			
						<div class="col-sm-6 col-md-4">
							<div class="interactive-child ">
								<div class="interactive-child-icon icon-new">
                                    <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_title();?>">
                                </div>
								<h3 class="interactive-child-title"><?php the_sub_field('title'); ?></h3>
								<p class="interactive-child-text"><?php the_sub_field('content'); ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>

        </div>

    </section>

  	 <!-- Ban lãnh đạo -->

    <section id="intro_leadership">

        <div class="intro_leadership_bg2">

            <div class="container">

                <div class="intro_leadership_title">

                    <h3>Ban lãnh đạo cùng đối tác thăm công ty</h3>

                    <hr>

                </div>
				<div class="row">
                  	<?php if( have_rows('leadership') ): ?>

                    	<?php while( have_rows('leadership') ): the_row();?>		
                			<div class="col-lg-3">
                              	<div class="intro_leadership_item">
                                    <a class="fancybox" data-fancybox="gallery" href="<?php the_sub_field('image'); ?>"><img src="<?php the_sub_field('image'); ?>" alt="<?php the_title();?>"></a>                       
                              	</div>                         
                            </div>

                       	<?php endwhile; ?>

                    <?php endif; ?>
	               	
              </div>

            </div>

        </div>

    </section>


    <!-- Sứ mệnh -->

    <section id="intro_mission">

        <div class="intro_mission_bg">

            <div class="container">

                <div class="intro_mission_title">

                    <h3>Sứ mệnh</h3>

                    <hr>

                </div>

                <div class="intro_mission_box">

                    <?php if( have_rows('intro_mission') ): ?>

                        <?php while( have_rows('intro_mission') ): the_row();?>			

                            <div class="intro_mission_item">

                                <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">

                                <h4><?php the_sub_field('title'); ?></h4>

                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </section>

	

    <!-- Ứng dng công nghệ -->

    <section id="intro_application">

        <div class="container">

            <div class="intro_application_title">

                <h3>Ứng dụng công nghệ</h3>

                <hr>

            </div>
 
            <div class="intro_application_box">
                <?php $i=0; if( have_rows('intro_application') ): ?>
                    <?php while( have_rows('intro_application') ): the_row();$i++;?>
                        <div class="intro_application_item">
                            <div class="circle-wrap">
                                <div class="circle-<?php echo $i; ?>">        
                                    <div class="mask full">
                                      <div class=" wow progress fill"></div>
                                    </div>
                                    <div class="mask half ">
                                      <div class="fill "></div>
                                    </div>
                           
                                    <div class="inside-circle">
                                        <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
                                    </div>  
                                </div>      
                            </div>
                            <h4><?php the_sub_field('title'); ?></h4> 
                        </div>
              			<style>
                         	<?php
              					$bg_color = get_sub_field('background-color');
                          		if( isset( $bg_color ) ): ?>
                                    .circle-<?php echo $i; ?> .mask .fill{
                                      background-color: <?php echo $bg_color; ?>;
                                      clip: rect(0px, 75px, 150px, 0px); 
                                    }
                				<?php endif;?>                   	 
              			</style>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </section>




    <!-- Khách hàng v đi tc -->

    <!-- <section id="intro_customer">

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

    </section> -->
   
</main>


<?php

get_footer('xuanthanhphat');



?>