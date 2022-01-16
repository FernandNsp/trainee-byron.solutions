<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?></title>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icones/favicon.ico">

      <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?></title>">
      <meta property="og:type" content="website"/>
      <meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?></title>"/>
      <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Esporte e Retrô."/>
      <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
      <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png">

      <script>document.documentElement.classList.add("js");</script>

      <!-- Inicio WordPress Header -->
      <?php wp_head(); ?>
      <!-- Final WordPress Header -->
   </head>
   
   <body>
      <header class="header">
         <div class="container">
            <a href="<?php bloginfo('url'); ?>" class="grid-2">
               <img src="<?php echo get_template_directory_uri(); ?>/img/home/bikcraft.svg" alt="logo-bikcraft">
            </a>  

            <nav class="grid-14 header_menu"> <!-- Navegacao do site -->
               <?php
                  $args = array(
                     'menu' => 'principal',
                     'theme_location' => 'menu-principal',
                     'container' => false
                  );
                  wp_nav_menu( $args );
               ?>
            </nav>
         </div>
      </header>
      <!-- Fecha Header -->
