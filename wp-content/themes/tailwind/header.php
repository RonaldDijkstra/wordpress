<?php ?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php
    wp_body_open();
    ?>
    <nav class="bg-black transition-all duration-150 ease-in-out fixed w-full left-0 top-0 z-10 motion-reduce:transition-none">
      <div class="py-2 text-white">
        Header
      </div>
    </nav>
    