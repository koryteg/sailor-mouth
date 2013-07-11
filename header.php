<!DOCTYPE html>
<!-- This code is taken from http://twitter.github.com/bootstrap/ -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo("name") . wp_title("|"); ?></title>
        <meta name="description" content="We are a Seattle hard rock and roll band. we are dirty, loud and are making music that you wish you could. we are Sailor Mouth">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        <div class="weirdo"><img src="<?php echo get_template_directory_uri(); ?>/img/reaper1.png"></div>
        <div class="container">
            <a name="top"></a>
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sailor-mouth.png" alt="sailor mouth"></a>
            </div>

            <div class="navbar span12"> 
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                   
                <div class="nav-collapse collapse">
                    <?php
                    $mainMenu = array(
                    'theme_location' => 'main_menu',
                    'depth'      => 0,
                    'container'  => false,
                    'menu_class'     => 'nav',
                    'walker'     => new BootstrapNavMenuWalker()
                );

                     wp_nav_menu($mainMenu); ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- Example row of columns -->
            <div class="row">