 <!-- footer -->
 <footer id="footer">
     <div class="container">
         <div class="row">
             <div class="col-lg-5">
                 <div class="footer-box-logo">
                     <a class="footer-logo" href="<?php echo home_url(); ?>"><img src="<?php the_field('logo', 'option'); ?>"></a>
                     <div class="footer-address">
                         <div class="media">
                             <img src="<?php bloginfo('template_url') ?>/assets/imgs/hotline.png" alt="hotline" class="media-img">
                             <div class="media-body align-self-center">
                                 <p><?php the_field('st_phone', 'option'); ?></p>
                             </div>
                         </div>
                         <div class="media">
                             <img src="<?php bloginfo('template_url') ?>/assets/imgs/email.png" alt="Thông tin email" class="media-img">
                             <div class="media-body align-self-center">
                                 <p><?php the_field('email', 'option'); ?></p>
                             </div>
                         </div>
                         <div class="media">
                             <img src="<?php bloginfo('template_url') ?>/assets/imgs/address.jpg" alt="địa chỉ xuân thành phát" class="media-img">
                             <div class="media-body align-self-center">
                                 <p><?php the_field('st_address', 'option'); ?></p>
                             </div>
                         </div>
                         <div class="media">
                             <p style="margin:auto 0;color:#333;">Liên kết mạng xã hôi:</p>
                             <div class="icon" style="padding-left:20px">
                                 <a href="https://www.facebook.com/XTPSoftware/" target="_blank"><i class="fab fa-facebook-square" style="font-size:40px; color:#35598E"></i></a>
                                 <a href="https://www.youtube.com/channel/UCZVehlQt6crDijq-LBHkBfA" target="_blank"><i class="fab fa-youtube-square" style="font-size:40px; color:#B82521"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3">
                 <div class="footer-title">
                     <h4>Xuanthanhphat info</h4>
                     <hr>
                 </div>
                 <div class="footer-box">
                     <?php wp_nav_menu(
                            array(
                                'theme_location' => 'footer-main',
                                'container' => 'false',
                                'menu_id' => 'footer-main',

                            )
                        ); ?>
                 </div>
                 <div class="footer-title" style="padding-top: 50px;">
                     <h4>Đơn vị group XTP</h4>
                     <hr>
                 </div>
                 <div class="footer-box">
                     <?php wp_nav_menu(
                            array(
                                'theme_location' => 'footer-group',
                                'container' => 'false',
                                'menu_id' => 'footer-group',

                            )
                        ); ?>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="footer-title">
                     <h4>Dịch vụ</h4>
                     <hr>
                 </div>
                 <div class="footer-box">
                     <?php wp_nav_menu(
                            array(
                                'theme_location' => 'footer-sevice',
                                'container' => 'false',
                                'menu_id' => 'footer-sevice',

                            )
                        ); ?>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <div class="copyright">
     <div class="container">
         <div class="copyright_box">
             © Copyright - <a href="<?php echo home_url(); ?>">xuanthanhphat.vn</a>
         </div>
     </div>
 </div>

 <!-- scroll top -->
 <!-- <div class="gototop js-top">
        <a href="#" class="js-gotop" title="Lên đầu trang">TOP</a>
    </div> -->

 <!-- tạo nut gọi -->
 <div id="button-contact-vr">
     <div id="zalo-vr" class="button-contact">
         <div class="phone-vr">
             <div class="phone-vr-circle-fill"></div>
             <div class="phone-vr-img-circle">
                 <a href="tel: 0988.176.899" title="gọi điện thoại">
                     <img class="lazy loaded" src="<?php bloginfo('template_url') ?>/assets/imgs/phone-2.png" data-src="<?php bloginfo('template_url') ?>/assets/imgs/phone-2.png" alt="Phone" data-was-processed="true">
                 </a>
             </div>
         </div>
     </div>
 </div>
 <!-- Messenger Plugin chat Code -->
 <div id="fb-root"></div>

 <!-- Your Plugin chat code -->
 <div id="fb-customer-chat" class="fb-customerchat">
 </div>

 <script>
     var chatbox = document.getElementById('fb-customer-chat');
     chatbox.setAttribute("page_id", "109300550929217");
     chatbox.setAttribute("attribution", "biz_inbox");

     window.fbAsyncInit = function() {
         FB.init({
             xfbml: true,
             version: 'v11.0'
         });
     };

     (function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s);
         js.id = id;
         js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
         fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
 </script>

 <!-- js -->
 <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/jquery.min.js"></script>
 <?php wp_footer(); ?>
 <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/vendor/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/jquery.easing.1.3.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/wow.min.js"></script>

 <script>
     new WOW().init();
 </script>
 <script>
     //  $(document).on('click', 'a[href^="#"]', function(event) {
     //      event.preventDefault();
     //      $('html, body').animate({
     //          scrollTop: $($.attr(this, 'href')).offset().top
     //      }, 1000);

     //  });
     $(document).ready(function() {
         var goToTop = function() {
             $('.js-gotop').on('click', function(event) {
                 event.preventDefault();
                 $('html, body').animate({
                     scrollTop: $('html').offset().top
                 }, 500, 'easeInOutExpo');
                 return false;
             });

             $(window).scroll(function() {
                 var $win = $(window);
                 if ($win.scrollTop() > 200) {
                     $('.js-top').addClass('active');
                 } else {
                     $('.js-top').removeClass('active');
                 }
             });
         };
         goToTop();
     });
 </script>
 <script type="text/javascript">
     $(document).ready(function() {
         $('.owl-banner').owlCarousel({
             loop: true,
             margin: 10,
             nav: true,
             autoplay: true,
             autoplayTimeout: 6500,
             autoplayHoverPause: true,
             navText: ['<svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"><symbol id="icon-chevron-left" viewBox="0 0 24 24"><path d="M15.707 17.293l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-6 6c-0.391 0.391-0.391 1.024 0 1.414l6 6c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414z"></path></symbol></use></svg>', '<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"><symbol id="icon-chevron-right" viewBox="0 0 24 24"><path d="M9.707 18.707l6-6c0.391-0.391 0.391-1.024 0-1.414l-6-6c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0z"></path></symbol></use></svg>'],
             items: 1,
         });

         $('.owl-partner').owlCarousel({
             loop: true,
             margin: 20,
             nav: true,
             dots: false,
             autoplay: true,
             autoplayTimeout: 3500,
             navText: ['<svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"><symbol id="icon-chevron-left" viewBox="0 0 24 24"><path d="M15.707 17.293l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-6 6c-0.391 0.391-0.391 1.024 0 1.414l6 6c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414z"></path></symbol></use></svg>', '<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"><symbol id="icon-chevron-right" viewBox="0 0 24 24"><path d="M9.707 18.707l6-6c0.391-0.391 0.391-1.024 0-1.414l-6-6c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0z"></path></symbol></use></svg>'],
             responsive: {
                 0: {
                     items: 1
                 },
                 370: {
                     items: 1
                 },
                 600: {
                     items: 2
                 },
                 1000: {
                     items: 2
                 }
             }
         });

         $('.owl-project').owlCarousel({
             loop: true,
             margin: 15,
             nav: false,
             dots: false,
             autoplay: true,
             autoplayTimeout: 3500,
             navText: ['<svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"><symbol id="icon-chevron-left" viewBox="0 0 24 24"><path d="M15.707 17.293l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-6 6c-0.391 0.391-0.391 1.024 0 1.414l6 6c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414z"></path></symbol></use></svg>', '<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"><symbol id="icon-chevron-right" viewBox="0 0 24 24"><path d="M9.707 18.707l6-6c0.391-0.391 0.391-1.024 0-1.414l-6-6c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0z"></path></symbol></use></svg>'],
             responsive: {
                 0: {
                     items: 1
                 },
                 370: {
                     items: 1
                 },
                 600: {
                     items: 1
                 },
                 1000: {
                     items: 1
                 }
             }
         });

         $('.owl-smart_project').owlCarousel({
             loop: true,
             margin: 15,
             nav: false,
             dots: false,
             autoplay: true,
             autoplayTimeout: 3500,
             navText: ['<svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"><symbol id="icon-chevron-left" viewBox="0 0 24 24"><path d="M15.707 17.293l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-6 6c-0.391 0.391-0.391 1.024 0 1.414l6 6c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414z"></path></symbol></use></svg>', '<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"><symbol id="icon-chevron-right" viewBox="0 0 24 24"><path d="M9.707 18.707l6-6c0.391-0.391 0.391-1.024 0-1.414l-6-6c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0z"></path></symbol></use></svg>'],
             responsive: {
                 0: {
                     items: 1
                 },
                 370: {
                     items: 1
                 },
                 600: {
                     items: 2
                 },
                 1000: {
                     items: 4
                 }
             }
         });


         $('.owl-news').owlCarousel({
             loop: true,
             margin: 15,
             nav: false,
             dots: false,
             autoplay: true,
             autoplayTimeout: 2500,
             navText: ['<svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"><symbol id="icon-chevron-left" viewBox="0 0 24 24"><path d="M15.707 17.293l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-6 6c-0.391 0.391-0.391 1.024 0 1.414l6 6c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414z"></path></symbol></use></svg>', '<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"><symbol id="icon-chevron-right" viewBox="0 0 24 24"><path d="M9.707 18.707l6-6c0.391-0.391 0.391-1.024 0-1.414l-6-6c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0z"></path></symbol></use></svg>'],
             responsive: {
                 0: {
                     items: 2
                 },
                 370: {
                     items: 2
                 },
                 600: {
                     items: 2
                 },
                 1000: {
                     items: 4
                 }
             }
         });
     });
 </script>
 <!-- js custom -->
 <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/main.js"></script>

 </body>

 </html>