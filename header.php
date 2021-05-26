<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Home — sungo</title>
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png" />

        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700%7CMontserrat:400,700%7COpen+Sans:300,400,600,700" rel="stylesheet" />

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" />
        <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" />
        


        
        <meta name="theme-color" content="#ffffff" /> 
        <?php wp_head(); ?>
        
    </head>
    <body id="home-version-3" class="home-version-4" data-style="default" <?php body_class(); ?>>
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <header id="header" class="menu_slide toggle-menu menu-right push-body headroom" data-headroom>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </header>
        <div id="site">
            <header id="header-top">
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="site-logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/main_logo-two.png" alt="Logo" /></div>
                            <div class="contact-number">
                                <i class="fa fa-mobile"></i> <img src="<?php bloginfo('template_directory'); ?>/assets/img/mobile.png" alt="Mobile" />
                                <p>
                                    +880 254 004 (Parsonal)<br />
                                    +880 254 004 (Office)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-border"></div>
                <div class="container">
                    <div class="row">
                        <nav class="navbar bootsnav navbar-sticky on no-full">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                                    <a class="navbar-brand" href="#brand"><img src="<?php bloginfo('template_directory'); ?>/assets/img/main_logo-two.png" class="logo" alt="" /></a>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-menu">
                                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#service">Service</a></li>
                                        <li><a href="#skill">Skill</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>
                                        <li><a href="#testimonial">Feedback</a></li>
                                        <li><a href="http://localhost/wordpress5/blog/">Blog</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="dt-search-wrapper"><input type="text" placeholder="search" /></div>
            </header>