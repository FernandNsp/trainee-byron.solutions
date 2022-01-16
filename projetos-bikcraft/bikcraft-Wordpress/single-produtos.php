<?php
// Template Name: Single Produtos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <section data-anime="1200" class="container produto_item fadeInDown">
      <div class="grid-11">
         <img src="<?php the_field('foto_principal'); ?>" alt="Bicicleta <?php the_title(); ?>" style="margin-top: 50px;">
         <h2><?php the_title(); ?></h2>
      </div>

      <div class="grid-5 produto_icone" style="margin-top: 50px;">
         <img src="<?php the_field('icone_produto'); ?>" alt="Icone <?php the_title(); ?>">
      </div>

      <div class="grid-8">
         <img src="<?php the_field('foto_secundaria'); ?>" alt="Bicicleta <?php the_title(); ?>">
      </div>

      <div class="grid-8 produto_info">
         <?php the_content();?>
      </div>
   </section>
   <!-- Fecha Produtos -->

   <?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php"); ?>
   <!-- Fecha Orcamento -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>