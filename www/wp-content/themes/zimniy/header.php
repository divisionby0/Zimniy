<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--=== LINK TAGS ===-->

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/css/images/logo.png" type="image/png"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,300italic,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/js/libs/fancybox/jquery.fancybox.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui3.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.formstyler.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-2.1.3.min.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/fancybox/jquery.fancybox.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/maskedinput/jquery.maskedinput.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://davidlynch.org/projects/maphilight/jquery.maphilight.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/datepicker-ru.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.formstyler.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/nav.jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.bxslider.js"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/html5shiv/es5-shim.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/html5shiv/html5shiv.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/respond/respond.min.js"></script>
    <![endif]-->

    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!--=== TITLE ===-->
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>

    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>

    <!-- begin header -->
    <header id="home">
        <div class="height-custom">
            <div class="header-top default-menu" id="rest_menu">
                <div class="row text-center">
                    <div href="" class="trigger_menu"><img src="<?php echo get_template_directory_uri(); ?>/css/images/menu-mobile.png" alt=""></div>
                    <div class="menu clearfix">
                        <?php
                        wp_nav_menu( array(
                            'container_class' => 'nav-menu',
                            'menu_class'      => 'navigation-menu clearfix',
                            'menu'            => 'primary',
                            'items_wrap'      => '<ul>%3$s</ul>',
                        ) );
                        ?>
                    </div>
                </div>
                <div class="container p0">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0 p0">
                        <div class="soc-header">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/ico-1.png" alt=""></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/ico-2.png" alt=""></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/ico-3.png" alt=""></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/css/images/ico-4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 p0">
                        <div class="navig">
                            <?php
                            wp_nav_menu( array(
                                'container_class' => 'nav-menu',
                                'menu_class'      => 'navigation-menu clearfix',
                                'menu'            => 'primary',
                                'items_wrap'      => '<ul>%3$s</ul>',
                            ) );
                            ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 p0">
                        <div class="tel-header">
                            <?php
                            $phone_number = get_option( 'phone_number', '' );
                            echo '<p>'.$phone_number.'<br>';
                            ?>
                                <span>Ежедневно, круглосуточно</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</head>
<body>
<div class="girl-back">
<?php //body_class(); ?>