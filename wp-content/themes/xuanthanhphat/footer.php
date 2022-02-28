 <!-- footer -->
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-box-logo">
                        <a class="footer-logo" href="#"><img src="https://cooftech.com/upload/logo/cooftech-icon-theme.png"></a>
                        <div class="footer-address">
                            <p>You never walk alone!. <br>Together we change the world.</p>
                            <p><i class="icomoon icomoon-icon-phone"></i> <em> +84 81845 6969</em> | <em>+84 91196 6900</em></p>
                            <p><i class="fa fa-map-signs"></i><em class="cft-lang" key="HOME-BLOCK10-12"> 195 Nguyễn Khang, Cầu Giấy, Hà Nội</em></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-title">
                        <h4>Xuanthanhphat info</h4>
                        <hr>
                    </div>
                    <div class="footer-box">
                        <ul>
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Dịch vụ</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">RSS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-title">
                        <h4>Dịch vụ</h4>
                        <hr>
                    </div>
                    <div class="footer-box">
                        <ul>
                            <li><a href="#">Thiết kế ứng dụng</a></li>
                            <li><a href="#">Thiết kế app</a></li>
                            <li><a href="#">Hạ tầng mạng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <div class="copyright_box">
                © Copyright - <a href="#" >Cooftech.com</a>
            </div>
        </div>
    </div>

    <!-- scroll top -->
    <div class="gototop js-top">
        <a href="#" class="js-gotop" title="Lên đầu trang">TOP</a>
    </div>

    <!-- js -->
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/vendor/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/js/wow.min.js"></script>
    <script>
     new WOW().init();
    </script>
    <script>
        $(document).on('click', 'a[href^="#"]', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 1000);
        });
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
            navText: ['<svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"><symbol id="icon-chevron-left" viewBox="0 0 24 24"><path d="M15.707 17.293l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-6 6c-0.391 0.391-0.391 1.024 0 1.414l6 6c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414z"></path></symbol></use></svg>', '<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"><symbol id="icon-chevron-right" viewBox="0 0 24 24"><path d="M9.707 18.707l6-6c0.391-0.391 0.391-1.024 0-1.414l-6-6c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0z"></path></symbol></use></svg>'],
            items: 1,
        });

        $('.owl-partner').owlCarousel({
            loop: true,
            margin: 24,
            nav: true,
            dots: false,
            navText: ['<svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"><symbol id="icon-chevron-left" viewBox="0 0 24 24"><path d="M15.707 17.293l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-6 6c-0.391 0.391-0.391 1.024 0 1.414l6 6c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414z"></path></symbol></use></svg>', '<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"><symbol id="icon-chevron-right" viewBox="0 0 24 24"><path d="M9.707 18.707l6-6c0.391-0.391 0.391-1.024 0-1.414l-6-6c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0z"></path></symbol></use></svg>'],
            responsive: {
                0: {
                    items: 1
                },
                370: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    });
    </script>
    <!-- js custom -->
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/js/main.js"></script>
	<?php wp_footer();?>
</body>

</html>