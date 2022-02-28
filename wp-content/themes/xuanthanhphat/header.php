<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
 		<?php
			wp_title('|', true, 'right');
			//bloginfo('name');
		?> 
	</title>
	<?php wp_head(); ?>
    <!-- css -->
    <link rel="icon" href="<?php the_field('logo', 'option'); ?>" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/vendor/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/vendor/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/vendor/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/vendor/owlcarousel/assets/owl.carousel.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/icomoon.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/responsive.css">
</head>

<body>
    <!-- Top header -->
    <header>
        <div class="container">
            <div class="nav-top">
                <div class="nav-contact">
                    <p><span><i class="icomoon icomoon-icon-phone"></i> Liên hệ: </span><span><a href="tel:<?php the_field('phone_header', 'option'); ?>"><?php the_field('phone_header', 'option'); ?></a></span></p>
                    <p><span><i class="icomoon icomoon-icon-envelope"></i> Email: </span><span><a href="mailto:<?php the_field('email', 'option'); ?>" style="color:#666; padding-left: 1em;"><?php the_field('email', 'option'); ?></a></span></p>
                </div>
                <div class="nav-language">
                    <div class="nav-language-child">
                        <a href="#"><img src="<?php bloginfo('template_url')?>/assets/imgs/vi.png" alt=""></a>
                    </div>
                    <div class="nav-language-child">
                        <a href="#"><img src="<?php bloginfo('template_url')?>/assets/imgs/en.png" alt=""></a>
                    </div>
                    <div class="nav-language-child">
                        <a href="#"><img src="<?php bloginfo('template_url')?>/assets/imgs/jp.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="menu">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php the_field('logo', 'option'); ?>"></a>
            <button class="navbar-toggler" type="button" onclick="openNav()">
                <i class="icomoon icomoon-icon-menu2"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end order-2 order-lg-1">
				<?php wp_nav_menu( 
					array( 
						'theme_location' => 'header-main', 
						'container' => 'false', 
						'menu_id' => 'header-main', 
						'menu_class' => 'navbar-nav navbar-nav-pc'
					) 
				); ?>
            </div>
            <div class="navbar-search  order-1 order-lg-2">
                <a class=" icon-search" href="javascript:void(0)"><i class="icomoon icomoon-icon-search"></i></a>
            </div>
            <form class="form-search" action="<?php bloginfo( 'url' );?>/" method="GET" role="form">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" name="s" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                    <div class="input-group-append">              
                        <button type="submit" class="btn btn-primary">Search </button>
                    </div>
                </div>
                <a class="icon-hide" href="javascript:void(0)"><i class="fas fa-times"></i></a>
            </form>

        </div>
        <div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()"></div>
        <div class="sidenav" id="mySidenav">
            <div class="sidenav-title">
                <h4>Menu</h4>
                <i class="icomoon icomoon-icon-menu2" onclick="closeOffcanvas();"></i>
            </div>
            <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'header-main', 
                        'container' => 'false', 
                        'menu_id' => 'header-main', 
                        'menu_class' => 'navbar-nav navbar-nav-mobile'
                    ) 
                ); ?>
        </div>
    </nav>
    
    <!-- Navbar -->
    <!-- Slide -->