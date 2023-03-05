<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php bloginfo('name'); ?>  <?php wp_title();  ?> | <?php if(is_front_page()){ bloginfo('description');} ?></title>
    <?php
  wp_head();
     ?>
</head>
<body <?php body_class(); ?>>
    <!-- <div class="menu-container">
        <a href="front-page.php"><img src="<?php bloginfo('template_directory') ?>/images/auriga.svg" alt=""></a>
        <div class="main-nav-bar">
           <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav ')) ?> 
        </div>
    </div> -->


    <div class="container ">
    <header class="d-flex align-items-center flex-wrap justify-content-center my-4">
     
<!--       
      <?php wp_nav_menu(
                    array('theme_location'=>'primary-menu',
                           'menu_class'=>'nav nav-pills ul-navbar',
                           'add_li_class'=> 'nav-item')) ?> --> 

<nav class="navbar navbar-expand-lg navbar-light w-100">
  <div class="container-fluid">
    <div class="logo-div" style="width:140px"><?php echo get_custom_logo(); ?></div>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
      <?php wp_nav_menu(
                    array('theme_location'=>'primary-menu',
                          'menu'  => 'header-menu',
                           'menu_class'=>'nav nav-pills ul-navbar',
                           'add_li_class'=> 'nav-item')) ?> 
    </div>
  </div>
</nav>
    </header>
  </div>