<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>HiTech Dental</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/vendors.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Open+Sans:300,400,700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/styles.css">

    <?php wp_head(); ?>
</head>


<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  
    <section class="header_top">

        <div class="container">
            <div class="row">

                <div class="col-12">
                    <a class="logo" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt=""></a>
                    <div class="mobile_menu_opener">
                        <img class="" src="<?php echo get_template_directory_uri();?>/assets/img/menu_button.png" alt="">
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>

    <section class="main_menu_area">
        <div class="container">
            <div class="row">
                <div class="col-12">


                    <!-- <ul class="main_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Products</a>
                            <ul>
                                <li><a href="#">Item One</a></li>
                                <li><a href="#">Item Two</a></li>
                                <li><a href="#">Item Three</a></li>
                                <li><a href="#">Item Four</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Send a Case</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul> -->
                    <?php
                        if (function_exists('wp_nav_menu')) {
                            wp_nav_menu(array('theme_location' => 'wpj-main-menu','container' => false, 'menu_class' => 'main_menu', 'fallback_cb' => 'wpj_default_menu'));
                        }
                        else {
                            wpj_default_menu();
                        }
                    ?>

                </div>
            </div>
        </div>
    </section>


    <section class="mobile_menu">
        <div class="container">
            <div class="closer"><i class="fas fa-times"></i></div>
            <div class="row">
                <div class="col-12">


                    <!-- <ul class="">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Products</a><span><i class="fas fa-chevron-down"></i></span>
                            <ul>
                                <li><a href="#">Item One</a></li>
                                <li><a href="#">Item Two</a></li>
                                <li><a href="#">Item Three</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Send a Case</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul> -->
                    <?php
                        if (function_exists('wp_nav_menu')) {
                            wp_nav_menu(array('theme_location' => 'wpj-main-menu','container' => false, 'menu_class' => '', 'fallback_cb' => 'wpj_default_menu'));
                        }
                        else {
                            wpj_default_menu();
                        }
                    ?>                     
                </div>
            </div>
        </div>
    </section>


