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

    <header class="main-header">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="header-container">
      <div class="container">
        <a class="navbar-brand logo" href="<?php bloginfo('url') ?>">
            <?php get_template_part('hejtiger-icon'); ?>
          </a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
            <?php
              wp_nav_menu (
              array(
                  'theme_location'  => 'main-menu',
                  'menu_class'      => 'nav nav-hejtiger',
                  'container'       => 'false'
                )
              );
            ?>

        </div><!--/.nav-collapse -->
        

      </div><!--container-->
    </div><!--header container-->
    </div><!--navbar-->

  </header><!--main header-->