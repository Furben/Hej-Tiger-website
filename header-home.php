<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">
  <link rel="icon" href="<?php print IMAGES; ?>/favicon.ico">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <!-- core CSS -->
  <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header class="home-header">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container hej-tiger-container">
        <a class="navbar-brand" href="<?php bloginfo('url') ?>">
          <?php get_template_part('hejtiger-icon'); ?>
        </a>

        <?php
        wp_nav_menu (
          array(
            'theme_location'  => 'main-menu',
            'menu_class'      => 'nav nav-hejtiger',
            'container'       => 'false'
            )
          );
          ?>

          <div class="social">
            
            <a href="https://www.facebook.com/hejtiger" class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </a>
            <a href="mailto:hej@hejtiger.dk" class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
            </a>
            <a href="#" class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
            </a>
            <a href="#" class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </a>
          </div><!--social-->
        </div>
      </nav>
</header><!--home-header-->